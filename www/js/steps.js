/* mapplic */
(function(e) {
    var t = function() {
        function n() {
            this.el = null;
            this.shift = 6;
            this.drop = 0;
            this.init = function() {
                var n = this;
                this.el = e("<div></div>").addClass("mapplic-tooltip");
                e("<a></a>").addClass("mapplic-tooltip-close").attr("href", "#").click(function(e) {
                    e.preventDefault();
                    t.deeplinking.clear();
                    n.hide()
                }).appendTo(this.el);
                this.image = e("<img>").addClass("mapplic-tooltip-image").hide().appendTo(this.el);
                this.title = e("<h4></h4>").addClass("mapplic-tooltip-title").appendTo(this.el);
                this.content = e("<div></div>").addClass("mapplic-tooltip-content").appendTo(this.el);
                this.desc = e("<div></div>").addClass("mapplic-tooltip-description").appendTo(this.content);
                this.link = e("<a>More</a>").addClass("mapplic-tooltip-link").attr("href", "#").hide().appendTo(this.el);
                e("<div></div>").addClass("mapplic-tooltip-triangle").prependTo(this.el);
                t.map.append(this.el)
            };
            this.set = function(t) {
                if (t) {
                    if (t.action == "none") {
                        this.el.stop().fadeOut(300);
                        return
                    }
                    var n = this;
                    if (t.image) this.image.attr("src", t.image).show();
                    else this.image.hide();
                    if (t.link) this.link.attr("href", t.link).show();
                    else this.link.hide();
                    this.title.text(t.title);
                    this.desc.html(t.description);
                    var r = e('.mapplic-pin[data-location="' + t.id + '"]');
                    if (r.length == 0) {
                        this.shift = 6
                    } else this.shift = r.height() + 6;
                    e("img", this.desc).load(function() {
                        n.position(t)
                    });
                    this.position(t)
                }
            };
            this.show = function(t) {
                if (t) {
                    if (t.action == "none") {
                        this.el.stop().fadeOut(300);
                        return
                    }
                    var n = this;
                    if (t.image) this.image.attr("src", t.image).show();
                    else this.image.hide();
                    if (t.link) this.link.attr("href", t.link).show();
                    else this.link.hide();
                    this.title.text(t.title);
                    this.desc.html(t.description);
                    var r = e('.mapplic-pin[data-location="' + t.id + '"]');
                    if (r.length == 0) {
                        this.shift = 6
                    } else this.shift = r.height() + 6;
                    e("img", this.desc).load(function() {
                        n.position(t)
                    });
                    this.position(t);
                    this.el.stop().fadeIn(200).show()
                }
            };
            this.position = function(e) {
                var t = e.x * 100;
                y = e.y * 100;
                mt = -this.el.outerHeight() - this.shift, ml = -this.el.outerWidth() / 2;
                this.el.css({
                    left: t + "%",
                    top: y + "%",
                    marginTop: mt,
                    marginLeft: -230
                });
                this.drop = this.el.outerHeight() + this.shift
            };
            this.hide = function() {
                var e = this;
                this.el.stop().fadeOut(300, function() {
                    e.desc.empty()
                })
            }
        }

        function r() {
            this.init = function() {
                var n = location.hash.slice(1);
                if (n) {
                    var r = a(n);
                    t.tooltip.set(r);
                    f(n, 0);
                    t.tooltip.show(r)
                } else p(.5, .5, 1, 0);
                e(window).on("hashchange", function() {
                    var e = location.hash.slice(1);
                    if (e) {
                        var n = a(e);
                        t.tooltip.set(n);
                        f(e, 800);
                        t.tooltip.show(n)
                    }
                });
                e(t.map).on("mouseover", ".mapplic-layer a", function() {
                    var n = e(this).attr("data-location");
                    if (n) {
                        var r = a(n);
                        t.tooltip.set(r);
                        f(n, 800);
                        t.tooltip.show(r)
                    }
                }).on("mouseout", function() {
                    t.tooltip.hide()
                })
            };
            this.clear = function() {
                if (!e.support.leadingWhitespace) window.location.hash = "";
                else history.pushState("", document.title, window.location.pathname)
            }
        }

        function i() {
            this.el = null;
            this.shift = 6;
            this.init = function() {
                var n = this;
                this.el = e("<div></div>").addClass("mapplic-tooltip mapplic-hovertip");
                this.title = e("<h4></h4>").addClass("mapplic-tooltip-title").appendTo(this.el);
                e("<div></div>").addClass("mapplic-tooltip-triangle").appendTo(this.el);
                e(t.map).on("mouseover", ".mapplic-layer a", function() {
                    var t = "";
                    if (e(this).hasClass("mapplic-pin")) {
                        t = e(this).data("location");
                        n.shift = e(this).height() + 6
                    } else {
                        t = e(this).attr("xlink:href").slice(1);
                        n.shift = 6
                    }
                    var r = a(t);
                    if (r) n.show(r)
                }).on("mouseout", function() {
                    n.fadeOut()
                });
                t.map.append(this.el)
            };
            this.show = function(e) {
                this.title.text(e.title);
                var t = e.x * 100,
                    n = e.y * 100,
                    r = -this.el.outerHeight() - this.shift,
                    i = -this.el.outerWidth() / 2;
                this.el.css({
                    left: t + "%",
                    top: n + "%",
                    marginTop: r,
                    marginLeft: i
                });
                this.el.stop().fadeIn(100)
            };
            this.hide = function() {
                this.el.stop().fadeOut(200)
            }
        }
        var t = this;
        t.o = {
            source: "locations.json",
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
        t.init = function(n, r) {
            t.o = e.extend(t.o, r);
            t.x = 0;
            t.y = 0;
            t.scale = 1;
            t.el = n.addClass("mapplic-element mapplic-loading").height(t.o.height);

            e.getJSON(t.o.source, function(e) {
                s(e);
                t.el.removeClass("mapplic-loading");
                o()
            }).fail(function() {
                /*document.location.reload()*/
            });
            return t
        };
        var s = function(s) {
            function f() {
                var t = e(".mapplic-pin:not(.mapplic-animate):visible");
                if (t.length > 0) {
                    t.first().addClass("mapplic-animate");
                    window.setTimeout(f, 200)
                } else {
                    e(".mapplic-animate").removeClass("mapplic-animate");
                    e(".mapplic-pin").css("opacity", "1")
                }
            }
            t.data = s;
            var o = 0;
            var a;
            t.container = e("<div></div>").addClass("mapplic-container").appendTo(t.el);
            t.map = e("<div></div>").addClass("mapplic-map").appendTo(t.container);
            t.levelselect = e("<select></select>").addClass("mapplic-levels-select");
            if (!t.o.sidebar) t.container.css("width", "100%");
            t.contentWidth = s.mapwidth;
            t.contentHeight = s.mapheight;
            t.hw_ratio = s.mapheight / s.mapwidth;
            if (s.mapheight / t.container.height() > s.mapwidth / t.container.width()) {
                t.min_width = t.container.width();
                t.min_height = t.container.width() * t.hw_ratio
            } else {
                t.min_height = t.container.height();
                t.min_width = t.container.height() / t.hw_ratio
            }
            t.map.css({
                width: s.mapwidth,
                height: s.mapheight
            });
            if (s.levels) {
                e.each(s.levels, function(n, r) {
                    var i = r.map;
                    var s = i.substr(i.lastIndexOf(".") + 1).toLowerCase();
                    var u = e("<div></div>").addClass("mapplic-layer").addClass(r.id).hide().appendTo(t.map);
                    switch (s) {
                        case "jpg":
                        case "jpeg":
                        case "png":
                        case "gif":
                            e("<img>").attr("src", i).addClass("mapplic-map-image").appendTo(u);
                            break;
                        case "svg":
                            e("<div></div>").addClass("mapplic-map-image").load(i).appendTo(u);
                            break;
                        default:
                            alert("File type " + s + " is not supported!")
                    }
                    if (t.minimap) t.minimap.addLayer(r);
                    t.levelselect.prepend(e("<option></option>").attr("value", r.id).text(r.title));
                    if (!a || r.show) {
                        a = r.id
                    }
                    e.each(r.locations, function(n, r) {
                        var i = r.y * 100;
                        var s = r.x * 100;
                        if (r.pin != "hidden") {
                            if (t.o.locations) {
                                var o = "#" + r.id;
                                if (r.action == "redirect") o = r.link;
                                var a = e('<a><div class="ms-point-center"></div><div class="ms-point-border"></div></a>').attr("href", o).addClass("mapplic-pin").css({
                                    top: i + "%",
                                    left: s + "%"
                                }).appendTo(u);
                                a.attr("data-location", r.id);
                                a.addClass(r.pin)
                            }
                        }
                        if (t.sidebar) t.sidebar.addLocation(r)
                    });
                    o++
                })
            }
            if (t.o.animate) {
                e(".mapplic-pin").css("opacity", "0");
                window.setTimeout(f, 200)
            }
            if (t.o.hovertip) t.hovertip = (new i).init();
            t.tooltip = new n;
            t.tooltip.init();
            if (o > 1) {
                t.levels = e("<div></div>").addClass("mapplic-levels");
                var v = e('<a href="#"></a>').addClass("mapplic-levels-up").appendTo(t.levels);
                t.levelselect.appendTo(t.levels);
                var m = e('<a href="#"></a>').addClass("mapplic-levels-down").appendTo(t.levels);
                t.container.append(t.levels);
                t.levelselect.change(function() {
                    var t = e(this).val();
                    u(t)
                });
                v.click(function(t) {
                    t.preventDefault();
                    if (!e(this).hasClass("disabled")) u("+")
                });
                m.click(function(t) {
                    t.preventDefault();
                    if (!e(this).hasClass("disabled")) u("-")
                })
            }
            u(a);
            e(window).resize(function() {
                e("#mapplic").height(e(window).height());
                var n = t.container.width() / t.contentWidth,
                    r = t.container.height() / t.contentHeight;
                if (n > r) t.fitscale = n;
                else t.fitscale = r;
                d(l(t.x), c(t.y), h(t.scale), 100);
                p(.5, .5, 1)
            }).resize();
            if (t.o.deeplinking) {
                t.deeplinking = new r;
                t.deeplinking.init()
            }
        };
        var o = function() {
            var n = t.map,
                r = e(".mapplic-map-image", t.map);
            document.ondragstart = function() {
                return false
            };
            if (!("ontouchstart" in window || "onmsgesturechange" in window)) return true;
            r.on("touchstart", function(e) {
                var i = e.originalEvent,
                    s = n.position();
                n.data("touchY", i.changedTouches[0].pageY - s.top);
                n.data("touchX", i.changedTouches[0].pageX - s.left);
                r.on("touchmove", function(e) {
                    e.preventDefault();
                    var i = e.originalEvent;
                    var s = i.touches.length;
                    if (s == 1) {
                        t.x = l(i.changedTouches[0].pageX - n.data("touchX"));
                        t.y = c(i.changedTouches[0].pageY - n.data("touchY"));
                        d(t.x, t.y, t.scale, 100)
                    } else {
                        r.off("touchmove")
                    }
                });
                r.on("touchend", function(e) {
                    r.off("touchmove touchend")
                })
            });
            var i = Hammer(t.map[0], {
                transform_always_block: true,
                drag_block_horizontal: true,
                drag_block_vertical: true
            });
            var s = 1,
                o;
            i.on("touch transform", function(e) {
                switch (e.type) {
                    case "touch":
                        o = s;
                        break;
                    case "transform":
                        var n = e.gesture.center;
                        s = Math.max(1, Math.min(o * e.gesture.scale, 10));
                        var r = t.scale;
                        t.scale = h(s * t.fitscale);
                        t.x = l(t.x - (n.pageX - t.container.offset().left - t.x) * (t.scale / r - 1));
                        t.y = c(t.y - (n.pageY - t.container.offset().top - t.y) * (t.scale / r - 1));
                        d(t.x, t.y, t.scale, 200);
                        break
                }
            })
        };
        var u = function(n) {
            switch (n) {
                case "+":
                    n = e("option:selected", t.levelselect).removeAttr("selected").prev().prop("selected", "selected").val();
                    break;
                case "-":
                    n = e("option:selected", t.levelselect).removeAttr("selected").next().prop("selected", "selected").val();
                    break;
                default:
                    e('option[value="' + n + '"]', t.levelselect).prop("selected", "selected")
            }
            var r = e(".mapplic-layer." + n, t.map);
            if (r.is(":visible")) return;
            t.tooltip.hide();
            e(".mapplic-layer:visible", t.map).hide();
            r.show();
            if (t.minimap) t.minimap.show(n);
            var i = t.levelselect.get(0).selectedIndex,
                s = e(".mapplic-levels-up", t.levels),
                o = e(".mapplic-levels-down", t.levels);
            s.removeClass("disabled");
            o.removeClass("disabled");
            if (i == 0) {
                s.addClass("disabled")
            } else if (i == t.levelselect.get(0).length - 1) {
                o.addClass("disabled")
            }
        };
        var a = function(n) {
            var r = null;
            e.each(t.data.levels, function(t, i) {
                e.each(i.locations, function(e, t) {
                    if (t.id == n) {
                        r = t
                    }
                })
            });
            return r
        };
        var f = function(n, r) {
            e.each(t.data.levels, function(i, s) {
                e.each(s.locations, function(e, i) {
                    if (i.id == n) {
                        var o = typeof i.zoom !== "undefined" ? i.zoom : 4,
                            a = t.tooltip.drop / t.contentHeight / o;
                        u(s.id);
                        p(i.x, parseFloat(i.y) - a, o, r, "easeInOutCubic")
                    }
                })
            })
        };
        var l = function(e) {
            var n = t.container.width() - t.contentWidth * t.scale;
            if (e > 0) e = 0;
            else if (e < n) e = n;
            return e
        };
        var c = function(e) {
            var n = t.container.height() - t.contentHeight * t.scale;
            if (e > 0) e = 0;
            else if (e < n) e = n;
            return e
        };
        var h = function(e) {
            if (e < t.fitscale) e = t.fitscale;
            else if (e > t.o.maxscale) e = t.o.maxscale;
            return e
        };
        var p = function(e, n, r, i, s) {
            i = typeof i !== "undefined" ? i : 400;
            t.scale = h(t.fitscale * r);
            var o = t.contentWidth * t.scale;
            t.x = l(t.container.width() * .5 - t.scale * t.contentWidth * e);
            t.y = c(t.container.height() * .5 - t.scale * t.contentHeight * n);
            d(t.x, t.y, t.scale, i, s)
        };
        var d = function(e, n, r, i, s) {
            if (r !== undefined) {
                t.map.stop().animate({
                    left: e,
                    top: 0,
                    width: t.contentWidth * r,
                    height: t.contentHeight * r
                }, i, s)
            } else {
                t.map.css({
                    left: e,
                    top: n
                })
            }
            if (t.minimap) t.minimap.update(e, n)
        }
    };
    e.fn.mapplic = function(n) {
        var r = this.length;
        return this.each(function(i) {
            var s = e(this),
                o = "mapplic" + (r > 1 ? "-" + ++i : ""),
                u = (new t).init(s, n);
            s.data(o, u).data("key", o)
        })
    }
})(jQuery)
/* script */
function validateEmail(e) {
    e.removeClass("error");
    var t = e.val();
    var n = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,3}$/;
    var r = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z-]{2,}[.][a-zA-Z]{2,3}$/;

    if ((n.exec(t) == null && r.exec(t) == null)) {
        e.addClass("error");
        $(".pp_inline #registerMsg").append("<div>" + invalide_email_error + "</div>");
        return false
    } else {
        var returned = true;

        $.ajax({
            url: $('#cnx_config').data('validationurl'),
            type : 'POST',
            data: 'mail=' + e.val(),
            async: false,
            success : function(result){
                if(result.exist) {
                    e.addClass("error");
                    $(".pp_inline #registerMsg").append("<div>Email exist.</div>");
                    returned = false;
                }
            }
        });
        return returned;

    }
}

function validateString(e) {
    min_lenght = 1;
    if (e.attr("id") == "gendre") min_lenght = 0;
    max_length = 150;
    var t = e.val().replace(/#/g, "");
    if (typeof e.data("max") !== typeof undefined) max_length = parseInt(e.data("max"));
    if (t.length > min_lenght && t.length <= max_length) {
        e.removeClass("error");
        return true
    } else {
        e.addClass("error");
        return false
    }
}

function validateString1(e) {
    max_length = 75;
    if (typeof e.data("max") !== typeof undefined) max_length = parseInt(e.data("max"));
    var t = /[&\?!:\.;,#~"^¨@\%\$£²¤§\\\*_=+<>|()\[\]\{\}/`\']{1,}$/;
    if (t.exec(e.val()) != null || e.val().length < 3 || e.val().length > max_length) {
        e.addClass("error");
        return false
    } else {
        e.removeClass("error");
        return true
    }
}

function validatePassword() {
    var e = $(".pp_inline #password");
    if (e.val().length < 6) {
        e.addClass("error");
        $(".pp_inline #registerMsg").append("<div> " + password_error + "</div>");
        return false
    } else {
        e.removeClass("error");
        return true
    }
}

function validatePpasswordAgain() {
    var e = $(".pp_inline #password");
    var t = $(".pp_inline #password_again");
    if (e.val() != t.val()) {
        t.addClass("error");
        $(".pp_inline #registerMsg").append("<div>" + confirm_password_error + "</div>");
        return false
    } else {
        t.removeClass("error");
        return true
    }
}

function ValidateForm() {
    $(".pp_inline #registerMsg").animate({
        height: ["hide", "swing"],
        opacity: "hide"
    }, 500, "linear");
    $(".pp_inline #registerMsg").html("");
    if (validateEmail($(".pp_inline #email")) & validatePassword() & validatePpasswordAgain()) {
        return true
    } else {
        if ($(".pp_inline #registerMsg").html() != "") {
            $(".pp_content").css("height", "auto");
            $(".pp_inline #registerMsg").animate({
                height: ["show", "swing"],
                opacity: "show"
            }, 500, "linear")
        }
        return false
    }
}
var current_fs, next_fs, previous_fs;
var left, opacity, scale;
var animating;
$(".signup").click(function() {
    if (validateString($("#gendre")) & validateString($("#company_country")) & validateString($("#firstname")) & validateString($("#lastname")) & validateString($("#job")) & validateString1($("#company_name")) & validateString($("#company_activity")) & validateString1($("#company_city"))) {
        $("#gender1").val($("#gendre").val());
        $("#firstname1").val($("#firstname").val());
        $("#lastname1").val($("#lastname").val());
        $("#job1").val($("#job").val());
        $("#company_name1").val($("#company_name").val());
        $("#company_activity1").val($("#company_activity").val());
        $("#company_city1").val($("#company_city").val());
        $("#company_country1").val($("#company_country").val());
        $("#birthday1").val($("#birthday").val());
        $("#birthmonth1").val($("#birthmonth").val());
        $("#birthyear1").val($("#birthyear").val());
        $.prettyPhoto.open("#cnx_config")
    }
});
(function(e, t) {
    e.fn.getCursorPosition = function() {
        var t = e(this).get(0);
        var n = 0;
        if ("selectionStart" in t) {
            n = t.selectionStart
        } else if ("selection" in document) {
            t.focus();
            var r = document.selection.createRange();
            var i = document.selection.createRange().text.length;
            r.moveStart("character", -t.value.length);
            n = r.text.length - i
        }
        return n
    }
})(jQuery);
$(document).ready(function() {
    $("#mapplic").mapplic({
        source: $("#mapplic").data('url'),
        height: parseInt($(window).height()),
        sidebar: false,
        minimap: false,
        locations: true,
        deeplinking: true,
        fullscreen: false,
        hovertip: false,
        developer: true,
        maxscale: 4
    });
    $("#company_activity").focus(function() {
        if ($("#company_activity").lenght == 0) $("#company_activity").val("#");
        else if ($("#company_activity").val().slice(0, 1) != "#") $("#company_activity").val("#" + $("#company_activity").val());
        $("#company_activity").val($("#company_activity").val().replace("##", "#").replace(" #", "#").replace("# ", "#"))
    });
    $("#company_activity").keyup(function() {
        if ($("#company_activity").lenght == 0) $("#company_activity").val("#");
        else if ($("#company_activity").val().slice(0, 1) != "#") $("#company_activity").val("#" + $("#company_activity").val());
        $("#company_activity").val($("#company_activity").val().replace("##", "#").replace(" #", "#").replace("# ", "#"))
    });
    $("#company_activity").blur(function() {
        if ($("#company_activity").val() == "#") $("#company_activity").val("")
    });
    $("#pAddAct").click(function() {
        txt = $("#company_activity").val();
        if ($("#company_activity").getCursorPosition() == 0) position = txt.length;
        else position = $("#company_activity").getCursorPosition();
        $("#company_activity").val(txt.replace(txt.slice(0, position), txt.slice(0, position) + "#"));
        $("#company_activity").val($("#company_activity").val().replace("##", "#").replace(" #", "#").replace("# ", "#"));
        $("#company_activity").caret(position + 1)
    });
    $("a[rel^='edit_image']").prettyPhoto({
        auto_height: true,
        social_tools: "",
        horizontal_padding: 16,
        markup: '<div class="pp_pic_holder"> <div class="ppt">&nbsp;</div><div class="pp_top"><div class="pp_left"></div><div class="pp_middle"></div><div class="pp_right"></div></div><div class="pp_content_container"><div class="pp_left"><div class="pp_right"><div class="pp_content"><div class="pp_loaderIcon"></div><div class="pp_fade"><a href="#" class="pp_expand" title="Expand the image">Expand</a><div class="pp_hoverContainer"><a class="pp_next" href="#">next</a> <a class="pp_previous" href="#">previous</a> </div><a class="pp_close" href="#">Close</a><div id="pp_full_res"></div><div class="pp_details"><div class="pp_nav"> <a href="#" class="pp_arrow_previous">Previous</a><p class="currentTextHolder">0/0</p><a href="#" class="pp_arrow_next">Next</a></div><p class="pp_description"></p><div class="pp_social">{pp_social}</div> </div></div> </div></div></div></div><div class="pp_bottom"><div class="pp_left"></div><div class="pp_middle"></div><div class="pp_right"></div></div></div><div class="pp_overlay"></div>'
    });
    $(".souscat a").click(function() {
        _this = $(this);
        $("#userLang").val(_this.data("lang"));
        $("#lang_link").html(_this.html());
        $(".souscat").animate({
            height: ["hide", "swing"],
            opacity: "hide"
        }, 500, "linear")
    });
    $("#btn_cat, #lang_link").click(function() {
        $(".souscat").animate({
            height: ["toggle", "swing"],
            opacity: "toggle"
        }, 500, "linear")
    });
    $("input, textarea").placeholder();
    $(".custom_gendre, .custom_country").click(function() {
        $(this).children("select").click()
    })
})