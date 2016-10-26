(function($) {
	var Mapplic = function() {
		var self = this;
		self.o = {
			source: 'locations.json',
			height: 420,
			locations: true,
			minimap: true,
			sidebar: true,
			deeplinking: true,
			search: true,
			clearbutton: true,
			hovertip: true,
			fullscreen: false,
			developer: false,
			animate: true,
			maxscale: 4
		};
		self.init = function(el, params) {
			self.o = $.extend(self.o, params);
			self.x = 0;
			self.y = 0;
			self.scale = 1;
			self.el = el.addClass('mapplic-element mapplic-loading').height(self.o.height);
			$.getJSON(self.o.source, function(data) { 
				processData(data);
				self.el.removeClass('mapplic-loading');				
				addControls();
			}).fail(function() { 
				document.location.reload() ;
			});
			return self;
		}
		function Tooltip() {
			this.el = null;
			this.shift = 6;
			this.drop = 0;
			this.init = function() {
				var s = this;
				this.el = $('<div></div>').addClass('mapplic-tooltip');
				$('<a></a>').addClass('mapplic-tooltip-close').attr('href', '#').click(function(e) {
					e.preventDefault();
					self.deeplinking.clear();
					s.hide();
				}).appendTo(this.el);
				this.image = $('<img>').addClass('mapplic-tooltip-image').hide().appendTo(this.el);
				this.title = $('<h4></h4>').addClass('mapplic-tooltip-title').appendTo(this.el);
				this.content = $('<div></div>').addClass('mapplic-tooltip-content').appendTo(this.el);
				this.desc = $('<div></div>').addClass('mapplic-tooltip-description').appendTo(this.content);
				this.link = $('<a>More</a>').addClass('mapplic-tooltip-link').attr('href', '#').hide().appendTo(this.el);
				$('<div></div>').addClass('mapplic-tooltip-triangle').prependTo(this.el);
				self.map.append(this.el);
			}
			this.set = function(location) {
				if (location) {
					if (location.action == 'none') {
						this.el.stop().fadeOut(300);
						return;
					}
					var s = this;
					if (location.image) this.image.attr('src', location.image).show();
					else this.image.hide();
					if (location.link) this.link.attr('href', location.link).show();
					else this.link.hide();
					this.title.text(location.title);
					this.desc.html(location.description);
					var pinselect = $('.mapplic-pin[data-location="' + location.id + '"]');
					if (pinselect.length == 0) {
						this.shift = 6;
					}
					else this.shift = pinselect.height() + 6;
					$('img', this.desc).load(function() {
						s.position(location);
					});
					this.position(location);
				}
			}
			this.show = function(location) {
				if (location) {
					if (location.action == 'none') {
						this.el.stop().fadeOut(300);
						return;
					}
					var s = this;
					if (location.image) this.image.attr('src', location.image).show();
					else this.image.hide();
					if (location.link) this.link.attr('href', location.link).show();
					else this.link.hide();
					this.title.text(location.title);
					this.desc.html(location.description);
					var pinselect = $('.mapplic-pin[data-location="' + location.id + '"]');
					if (pinselect.length == 0) {
						this.shift = 6;
					}
					else this.shift = pinselect.height() + 6;
					$('img', this.desc).load(function() {
						s.position(location);
					});
					this.position(location);
					this.el.stop().fadeIn(200).show();
				}
			}
			this.position = function(location) {
				var x = location.x * 100;
					y = location.y * 100;
					mt = -this.el.outerHeight() - this.shift,
					ml = -this.el.outerWidth() / 2;
				this.el.css({
					left: x + '%',
					top: y + '%',
					marginTop: mt,
					marginLeft: -230
				});
				this.drop = this.el.outerHeight() + this.shift;
			}
			this.hide = function() {
				var s = this;				
				this.el.stop().fadeOut(300, function() {
					s.desc.empty();
				});
			}
		}
		function Deeplinking() {
			this.init = function() {
				var id = location.hash.slice(1);
				if (id) {
					var locationData = getLocationData(id);
					self.tooltip.set(locationData);
					showLocation(id, 0);
					self.tooltip.show(locationData);
				}
				else zoomTo(0.5, 0.5, 1, 0);
				$(window).on('hashchange', function() {
					var id = location.hash.slice(1);
					if (id) {
						var locationData = getLocationData(id);
						self.tooltip.set(locationData);
						showLocation(id, 800);
						self.tooltip.show(locationData);
					}
				});
				$(self.map).on('mouseover', '.mapplic-layer a', function() {
					var id = $(this).attr('data-location') ;
					if (id) {
						var locationData = getLocationData(id);
						self.tooltip.set(locationData);
						showLocation(id, 800);
						self.tooltip.show(locationData);
					}					
				}).on('mouseout', function() {
					self.tooltip.hide();
				});
			}
			this.clear = function() {
				if (!$.support.leadingWhitespace) window.location.hash = '';
				else history.pushState('', document.title, window.location.pathname);
			}
		}
		function HoverTooltip() {
			this.el = null;
			this.shift = 6;
			this.init = function() {
				var s = this;
				this.el = $('<div></div>').addClass('mapplic-tooltip mapplic-hovertip');
				this.title = $('<h4></h4>').addClass('mapplic-tooltip-title').appendTo(this.el);
				$('<div></div>').addClass('mapplic-tooltip-triangle').appendTo(this.el);
				$(self.map).on('mouseover', '.mapplic-layer a', function() {
					var data = '';
					if ($(this).hasClass('mapplic-pin')) {
						data = $(this).data('location');
						s.shift = $(this).height() + 6;
					} else {
						data = $(this).attr('xlink:href').slice(1);
						s.shift = 6;
					}
					var location = getLocationData(data);
					if (location) s.show(location);
				}).on('mouseout', function() {
					s.fadeOut();
				});
				self.map.append(this.el);
			}
			this.show = function(location) {
				this.title.text(location.title);
				var x = location.x * 100,
					y = location.y * 100,
					mt = -this.el.outerHeight() - this.shift,
					ml = -this.el.outerWidth() / 2;
				this.el.css({
					left: x + '%',
					top: y + '%',
					marginTop: mt,
					marginLeft: ml
				});
				this.el.stop().fadeIn(100);
			}
			this.hide = function() {
				this.el.stop().fadeOut(200);
			}
		}
		var processData = function(data) {
			self.data = data;
			var nrlevels = 0;
			var shownLevel;
			self.container = $('<div></div>').addClass('mapplic-container').appendTo(self.el);
			self.map = $('<div></div>').addClass('mapplic-map').appendTo(self.container);
			self.levelselect = $('<select></select>').addClass('mapplic-levels-select');
			if (!self.o.sidebar) self.container.css('width', '100%');
			self.contentWidth = data.mapwidth;
			self.contentHeight = data.mapheight;
			self.hw_ratio = data.mapheight / data.mapwidth;
			if (data.mapheight / self.container.height() > data.mapwidth / self.container.width()) {
				self.min_width = self.container.width();
				self.min_height = self.container.width() * self.hw_ratio;
			} else {
				self.min_height = self.container.height();
				self.min_width = self.container.height() / self.hw_ratio;
			}
			self.map.css({
				'width': data.mapwidth,
				'height': data.mapheight
			});
			if (data.levels) {
				$.each(data.levels, function(index, value) {
					var source = value.map;
					var extension = source.substr((source.lastIndexOf('.') + 1)).toLowerCase();
					var layer = $('<div></div>').addClass('mapplic-layer').addClass(value.id).hide().appendTo(self.map);
					switch (extension) {
						case 'jpg': case 'jpeg': case 'png': case 'gif':
							$('<img>').attr('src', source).addClass('mapplic-map-image').appendTo(layer);
							break;
						case 'svg':
							$('<div></div>').addClass('mapplic-map-image').load(source).appendTo(layer);
							break;
						default:
							alert('File type ' + extension + ' is not supported!');
					}
					if (self.minimap) self.minimap.addLayer(value);
					self.levelselect.prepend($('<option></option>').attr('value', value.id).text(value.title));
					if (!shownLevel || value.show) {
						shownLevel = value.id;
					}
					$.each(value.locations, function(index, value) {
						var top = value.y * 100;
						var left = value.x * 100;
						if (value.pin != 'hidden') {
							if (self.o.locations) {
								var target = '#' + value.id;
								if (value.action == 'redirect') target = value.link;
								var pin = $('<a><div class="ms-point-center"></div><div class="ms-point-border"></div></a>').attr('href', target).addClass('mapplic-pin').css({'top': top + '%', 'left': left + '%'}).appendTo(layer);
								pin.attr('data-location', value.id);
								pin.addClass(value.pin);
							}
						}
						if (self.sidebar) self.sidebar.addLocation(value);
					});
					nrlevels++;
				});
			}
			if (self.o.animate) {
				$('.mapplic-pin').css('opacity', '0');
				window.setTimeout(animateNext, 200);
			}
			function animateNext() {
				var select = $('.mapplic-pin:not(.mapplic-animate):visible');
				if (select.length > 0) {
					select.first().addClass('mapplic-animate');
					window.setTimeout(animateNext, 200);
				} else {
					$('.mapplic-animate').removeClass('mapplic-animate');
					$('.mapplic-pin').css('opacity', '1');
				}
			}
			if (self.o.hovertip) self.hovertip = new HoverTooltip().init();
			self.tooltip = new Tooltip();
			self.tooltip.init();
			if (nrlevels > 1) {
				self.levels = $('<div></div>').addClass('mapplic-levels');
				var up = $('<a href="#"></a>').addClass('mapplic-levels-up').appendTo(self.levels);
				self.levelselect.appendTo(self.levels);
				var down = $('<a href="#"></a>').addClass('mapplic-levels-down').appendTo(self.levels);
				self.container.append(self.levels);			
				self.levelselect.change(function() {
					var value = $(this).val();
					level(value);
				});			
				up.click(function(e) {
					e.preventDefault();
					if (!$(this).hasClass('disabled')) level('+');
				});
				down.click(function(e) {
					e.preventDefault();
					if (!$(this).hasClass('disabled')) level('-');
				});
			}
			level(shownLevel);
			$(window).resize(function() {
				$('#mapplic').height($(window).height()) ;
				var wr = self.container.width() / self.contentWidth,
					hr = self.container.height() / self.contentHeight;
				if (wr > hr) self.fitscale = wr;
				else self.fitscale = hr;
				moveTo(normalizeX(self.x), normalizeY(self.y), normalizeScale(self.scale), 100);
				zoomTo(0.5, 0.5, 1);
			}).resize();
			// Deeplinking
			if (self.o.deeplinking) {
				self.deeplinking = new Deeplinking();
				self.deeplinking.init();
			}
		}
		var addControls = function() {
			var map = self.map,
				mapbody = $('.mapplic-map-image', self.map);
			document.ondragstart = function() { return false; }
			if (!('ontouchstart' in window || 'onmsgesturechange' in window)) return true;
			mapbody.on('touchstart', function(e) {
				var orig = e.originalEvent,
					pos = map.position();
				map.data('touchY', orig.changedTouches[0].pageY - pos.top);
				map.data('touchX', orig.changedTouches[0].pageX - pos.left);
				mapbody.on('touchmove', function(e) {
					e.preventDefault();
					var orig = e.originalEvent;
					var touches = orig.touches.length;
					if (touches == 1) {
						self.x = normalizeX(orig.changedTouches[0].pageX - map.data('touchX'));
						self.y = normalizeY(orig.changedTouches[0].pageY - map.data('touchY'));
						moveTo(self.x, self.y, self.scale, 100);
					} else {
						mapbody.off('touchmove');
					}
				});
				mapbody.on('touchend', function(e) {
					mapbody.off('touchmove touchend');
				});
			});
			var mapPinch = Hammer(self.map[0], {
				transform_always_block: true,
				drag_block_horizontal: true,
				drag_block_vertical: true
			});
			var scale=1, last_scale;
			mapPinch.on('touch transform', function(ev) {
				switch(ev.type) {
					case 'touch':
						last_scale = scale;
						break;
					case 'transform':
						var center = ev.gesture.center;
						scale = Math.max(1, Math.min(last_scale * ev.gesture.scale, 10));
						var oldscale = self.scale;
						self.scale = normalizeScale(scale * self.fitscale);
						self.x = normalizeX(self.x - (center.pageX - self.container.offset().left - self.x) * (self.scale/oldscale - 1));
						self.y = normalizeY(self.y - (center.pageY - self.container.offset().top - self.y) * (self.scale/oldscale - 1));
						moveTo(self.x, self.y, self.scale, 200);
						break;
				}
			});
		}
		var level = function(target) {
			switch (target) {
				case '+':
					target = $('option:selected', self.levelselect).removeAttr('selected').prev().prop('selected', 'selected').val();
					break;
				case '-':
					target = $('option:selected', self.levelselect).removeAttr('selected').next().prop('selected', 'selected').val();
					break;
				default:
					$('option[value="' + target + '"]', self.levelselect).prop('selected', 'selected');
			}
			var layer = $('.mapplic-layer.' + target, self.map);
			if (layer.is(':visible')) return;
			self.tooltip.hide();
			$('.mapplic-layer:visible', self.map).hide();
			layer.show();
			if (self.minimap) self.minimap.show(target);
			var index = self.levelselect.get(0).selectedIndex,
				up = $('.mapplic-levels-up', self.levels),
				down = $('.mapplic-levels-down', self.levels);
			up.removeClass('disabled');
			down.removeClass('disabled');
			if (index == 0) {
				up.addClass('disabled');
			} else if (index == self.levelselect.get(0).length - 1) {
				down.addClass('disabled');
			}
		}
		var getLocationData = function(id) {
			var data = null;
			$.each(self.data.levels, function(index, layer) {
				$.each(layer.locations, function(index, value) {
					if (value.id == id) {
						data = value;
					}
				});
			});
			return data;
		}
		var showLocation = function(id, duration) {
			$.each(self.data.levels, function(index, layer) {
				$.each(layer.locations, function(index, value) {
					if (value.id == id) {
						var zoom = typeof value.zoom !== 'undefined' ? value.zoom : 4,		
							drop = self.tooltip.drop / self.contentHeight / zoom;
						level(layer.id);
						zoomTo(value.x, parseFloat(value.y) - drop, zoom, duration, 'easeInOutCubic');
					}
				});
			});
		};
		var normalizeX = function(x) {
			var minX = self.container.width() - self.contentWidth * self.scale;
			if (x > 0) x = 0;
			else if (x < minX) x = minX;
			return x;
		}
		var normalizeY = function(y) {
			var minY = self.container.height() - self.contentHeight * self.scale;
			if (y > 0) y = 0;
			else if (y < minY) y = minY;
			return y;
		}
		var normalizeScale = function(scale) {
			if (scale < self.fitscale) scale = self.fitscale;
			else if (scale > self.o.maxscale) scale = self.o.maxscale;
			return scale;
		}
		var zoomTo = function(x, y, s, duration, easing) {
			duration = typeof duration !== 'undefined' ? duration : 400;
			self.scale = normalizeScale(self.fitscale * s);
			var scale = self.contentWidth * self.scale;
			self.x = normalizeX(self.container.width() * 0.5 - self.scale * self.contentWidth * x);
			self.y = normalizeY(self.container.height() * 0.5 - self.scale * self.contentHeight * y);
			moveTo(self.x, self.y, self.scale, duration, easing);
		}
		var moveTo = function(x, y, scale, d, easing) {
			if (scale !== undefined) {
				self.map.stop().animate({
					'left': x,
					'top': 0,
					'width': self.contentWidth * scale,
					'height': self.contentHeight * scale
				}, d, easing);
			} else {
				self.map.css({
					'left': x,
					'top': y
				});
			}
			if (self.minimap) self.minimap.update(x, y);
		}
	};
	$.fn.mapplic = function(params) {
		var len = this.length;
		return this.each(function(index) {
			var me = $(this),
				key = 'mapplic' + (len > 1 ? '-' + ++index : ''),
				instance = (new Mapplic).init(me, params);
			me.data(key, instance).data('key', key);
		});
	};
})(jQuery);