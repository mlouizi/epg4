<?php

/* EpluggFrontBundle:popin:upload_avatar.html.twig */
class __TwigTemplate_af3dcafb34a2323e089d88f72d909972d01150ece98bc61eced398a4cd1714ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle:popin:base_popin.html.twig", "EpluggFrontBundle:popin:upload_avatar.html.twig", 1);
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'styles' => array($this, 'block_styles'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EpluggFrontBundle:popin:base_popin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_scripts($context, array $blocks = array())
    {
        // line 3
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jcrop/jquery.Jcrop.js"), "html", null, true);
        echo "\"></script>
    <script>
        // convert bytes into friendly format
        function bytesToSize(bytes) {
            var sizes = ['Bytes', 'KB', 'MB'];
            if (bytes == 0) return 'n/a';
            var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
            return (bytes / Math.pow(1024, i)).toFixed(1) + ' ' + sizes[i];
        }
        ;

        // check for selected crop region
        function checkForm() {
            if (parseInt(\$('#w').val())) return true;
            \$('.error').html('Please select a crop region and then press Upload').show();
            return false;
        }
        ;

        // update info by cropping (onChange and onSelect events handler)
        function updateInfo(e) {
            \$('#x1').val(e.x);
            \$('#y1').val(e.y);
            \$('#x2').val(e.x2);
            \$('#y2').val(e.y2);
            \$('#w').val(e.w);
            \$('#h').val(e.h);
            var rx = 200 / e.w;
            var ry = 200 / e.h;
            image_width = \$(\"#preview\").width();
            image_height = \$('#preview').height();
            \$('#demo').css({
                width: Math.round(rx * image_width) + 'px',
                height: Math.round(ry * image_height) + 'px',
                marginLeft: '-' + Math.round(rx * e.x) + 'px',
                marginTop: '-' + Math.round(ry * e.y) + 'px'
            });
            \$('#divSubmit').show();
        }
        ;

        // clear info by cropping (onRelease event handler)
        function clearInfo() {
            \$('.info #w').val('');
            \$('.info #h').val('');
        }
        ;

        // Create variables (in this scope) to hold the Jcrop API and image size
        var jcrop_api, boundx, boundy;

        function fileSelectHandler() {
            // get selected file
            var oFile = \$('#image_file')[0].files[0];

            // hide all errors
            \$('.error').hide();

            // check for image type (jpg and png are allowed)
            var rFilter = /^(image\\/jpeg|image\\/png)\$/i;
            if (!rFilter.test(oFile.type)) {
                \$('.error').html('Please select a valid image file (jpg and png are allowed)').show();
                return;
            }

            // check for file size


            // preview element
            var oImage = document.getElementById('preview');
            var oDemo = document.getElementById('demo');


            // prepare HTML5 FileReader
            var oReader = new FileReader();
            oReader.onload = function (e) {

                // e.target.result contains the DataURL which we can use as a source of the image
                oImage.src = e.target.result;
                oDemo.src = e.target.result;
                oImage.onload = function () { // onload event handler

                    // display step 2
                    \$('.step2').fadeIn(500);

                    // display some basic image info
                    var sResultFileSize = bytesToSize(oFile.size);
                    \$('#filesize').val(sResultFileSize);
                    \$('#filetype').val(oFile.type);
                    \$('#filedim').val(oImage.naturalWidth + ' x ' + oImage.naturalHeight);

                    // destroy Jcrop if it is existed
                    if (typeof jcrop_api != 'undefined') {
                        jcrop_api.destroy();
                        jcrop_api = null;
                        \$('#preview').width(oImage.naturalWidth);
                        \$('#preview').height(oImage.naturalHeight);
                    }

                        // initialize Jcrop
                        \$('#preview').Jcrop({
                            minSize: [32, 32], // min crop size
                            aspectRatio: 1, // keep aspect ratio 1:1
                            bgFade: true, // use fade effect
                            bgOpacity: .3, // fade opacity
                            onChange: updateInfo,
                            onSelect: updateInfo,
                            onRelease: clearInfo,

                            setSelect: [0, 160, 160, 0]
                        }, function () {

                            // use the Jcrop API to get the real image size
                            var bounds = this.getBounds();
                            boundx = bounds[0];
                            boundy = bounds[1];

                            // Store the Jcrop API in the jcrop_api variable
                            jcrop_api = this;
                        });


                };
            };

            // read selected file as DataURL
            oReader.readAsDataURL(oFile);
        }

    </script>
    <script>
        \$(document).ready(function() {//start document ready
            \$('#avatar_form').on('submit', function(e) {
                e.preventDefault();
                var form = \$(this);
                var formdata = false;
                if (window.FormData){
                    formdata = new FormData(form[0]);
                }
                \$.ajax({
                    url: form.attr('action'), // Le nom du fichier indiqué dans le formulaire
                    type: form.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
                    data: formdata ? formdata : form.serialize(),
                    cache       : false,
                    contentType : false,
                    processData : false,
                    success: function(data) { // Je récupère la réponse du fichier PHP
                        if(data.valid) {
                            \$(\".";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["avatarType"]) ? $context["avatarType"] : null), "html", null, true);
        echo " .avatar_id\"  , window.parent.document).val(data.imageId);
                            \$(\".";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["avatarType"]) ? $context["avatarType"] : null), "html", null, true);
        echo " .avatar_img\", window.parent.document).attr(\"src\", data.imageUrl);
                             window.parent.\$('#pp_close').trigger('click');

                         }
                    }
                });
            });
        });//end document ready
    </script>
    ";
        // line 161
        if ((isset($context["valid"]) ? $context["valid"] : null)) {
            // line 162
            echo "        <script>

        </script>
    ";
        }
    }

    // line 167
    public function block_styles($context, array $blocks = array())
    {
        // line 168
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jcrop/jquery.Jcrop.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">

    <style type=\"text/css\">
        img[src='Error.src']{
            display: none;
        }

        #target { background-color: #ccc; width: 500px; height: 330px; font-size: 24px; display: block; }
        div.upload {width: 64px;height: 28px;background: url(";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/upload.png"), "html", null, true);
        echo ");overflow: hidden;}
        div.upload input {display: block !important;width: 64px !important;height: 28px !important;opacity: 0 !important;overflow: hidden !important;}

    </style>
";
    }

    // line 181
    public function block_body($context, array $blocks = array())
    {
        // line 182
        echo "    <div class=\"titre_plugg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Modification image"), "html", null, true);
        echo "</div>
    <div class=\"clear20\"></div>
    <div style=\"display: none;\" id=\"dialog\">
        <div class=\"message error\"></div>
    </div>
    <div style=\"padding:10px\">
        <!-- upload form -->
        ";
        // line 189
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("eplugg_upload_avatar", array("avatarType" => (isset($context["avatarType"]) ? $context["avatarType"] : null))), "attr" => array("id" => "avatar_form")));
        echo "

            <table width=\"100%\">
                <tbody>
                <tr>
                    <td colspan=\"2\">
                        <div class=\"upload\">
                            ";
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'widget', array("id" => "image_file", "attr" => array("class" => "", "onchange" => "fileSelectHandler()")));
        echo "
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tbody>
                            <tr>
                                <td>
                                    <div style=\"float: left ;overflow: hidden; width: 200px; height: 200px \"
                                         id=\"div_preview\">
                                        <img  class=\"content_image\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
        echo "\" id=\"demo\">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align=\"right\" style=\"display:none\" id=\"divSubmit\">

                                        <input type=\"submit\" class=\"btn btn-large btn-inverse\" id=\"save_image\" value=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enregistrer"), "html", null, true);
        echo "\">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <div id=\"response\">
                            <img class=\"content_image\" src=\"\" id=\"preview\" style=\"display: none\">

                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- hidden crop params -->
            ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "startWidth", array()), 'widget', array("id" => "x1"));
        echo "
            ";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "startHeight", array()), 'widget', array("id" => "y1"));
        echo "
            ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "endWidth", array()), 'widget', array("id" => "x2"));
        echo "
            ";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "endHeight", array()), 'widget', array("id" => "y2"));
        echo "

        ";
        // line 238
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    </div>



";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:popin:upload_avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 238,  317 => 236,  313 => 235,  309 => 234,  305 => 233,  285 => 216,  274 => 208,  259 => 196,  249 => 189,  238 => 182,  235 => 181,  226 => 176,  214 => 168,  211 => 167,  203 => 162,  201 => 161,  189 => 152,  185 => 151,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle:popin:base_popin.html.twig' %}*/
/* {% block scripts %}*/
/*     <script type="text/javascript" src="{{ asset('js/jcrop/jquery.Jcrop.js') }}"></script>*/
/*     <script>*/
/*         // convert bytes into friendly format*/
/*         function bytesToSize(bytes) {*/
/*             var sizes = ['Bytes', 'KB', 'MB'];*/
/*             if (bytes == 0) return 'n/a';*/
/*             var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));*/
/*             return (bytes / Math.pow(1024, i)).toFixed(1) + ' ' + sizes[i];*/
/*         }*/
/*         ;*/
/* */
/*         // check for selected crop region*/
/*         function checkForm() {*/
/*             if (parseInt($('#w').val())) return true;*/
/*             $('.error').html('Please select a crop region and then press Upload').show();*/
/*             return false;*/
/*         }*/
/*         ;*/
/* */
/*         // update info by cropping (onChange and onSelect events handler)*/
/*         function updateInfo(e) {*/
/*             $('#x1').val(e.x);*/
/*             $('#y1').val(e.y);*/
/*             $('#x2').val(e.x2);*/
/*             $('#y2').val(e.y2);*/
/*             $('#w').val(e.w);*/
/*             $('#h').val(e.h);*/
/*             var rx = 200 / e.w;*/
/*             var ry = 200 / e.h;*/
/*             image_width = $("#preview").width();*/
/*             image_height = $('#preview').height();*/
/*             $('#demo').css({*/
/*                 width: Math.round(rx * image_width) + 'px',*/
/*                 height: Math.round(ry * image_height) + 'px',*/
/*                 marginLeft: '-' + Math.round(rx * e.x) + 'px',*/
/*                 marginTop: '-' + Math.round(ry * e.y) + 'px'*/
/*             });*/
/*             $('#divSubmit').show();*/
/*         }*/
/*         ;*/
/* */
/*         // clear info by cropping (onRelease event handler)*/
/*         function clearInfo() {*/
/*             $('.info #w').val('');*/
/*             $('.info #h').val('');*/
/*         }*/
/*         ;*/
/* */
/*         // Create variables (in this scope) to hold the Jcrop API and image size*/
/*         var jcrop_api, boundx, boundy;*/
/* */
/*         function fileSelectHandler() {*/
/*             // get selected file*/
/*             var oFile = $('#image_file')[0].files[0];*/
/* */
/*             // hide all errors*/
/*             $('.error').hide();*/
/* */
/*             // check for image type (jpg and png are allowed)*/
/*             var rFilter = /^(image\/jpeg|image\/png)$/i;*/
/*             if (!rFilter.test(oFile.type)) {*/
/*                 $('.error').html('Please select a valid image file (jpg and png are allowed)').show();*/
/*                 return;*/
/*             }*/
/* */
/*             // check for file size*/
/* */
/* */
/*             // preview element*/
/*             var oImage = document.getElementById('preview');*/
/*             var oDemo = document.getElementById('demo');*/
/* */
/* */
/*             // prepare HTML5 FileReader*/
/*             var oReader = new FileReader();*/
/*             oReader.onload = function (e) {*/
/* */
/*                 // e.target.result contains the DataURL which we can use as a source of the image*/
/*                 oImage.src = e.target.result;*/
/*                 oDemo.src = e.target.result;*/
/*                 oImage.onload = function () { // onload event handler*/
/* */
/*                     // display step 2*/
/*                     $('.step2').fadeIn(500);*/
/* */
/*                     // display some basic image info*/
/*                     var sResultFileSize = bytesToSize(oFile.size);*/
/*                     $('#filesize').val(sResultFileSize);*/
/*                     $('#filetype').val(oFile.type);*/
/*                     $('#filedim').val(oImage.naturalWidth + ' x ' + oImage.naturalHeight);*/
/* */
/*                     // destroy Jcrop if it is existed*/
/*                     if (typeof jcrop_api != 'undefined') {*/
/*                         jcrop_api.destroy();*/
/*                         jcrop_api = null;*/
/*                         $('#preview').width(oImage.naturalWidth);*/
/*                         $('#preview').height(oImage.naturalHeight);*/
/*                     }*/
/* */
/*                         // initialize Jcrop*/
/*                         $('#preview').Jcrop({*/
/*                             minSize: [32, 32], // min crop size*/
/*                             aspectRatio: 1, // keep aspect ratio 1:1*/
/*                             bgFade: true, // use fade effect*/
/*                             bgOpacity: .3, // fade opacity*/
/*                             onChange: updateInfo,*/
/*                             onSelect: updateInfo,*/
/*                             onRelease: clearInfo,*/
/* */
/*                             setSelect: [0, 160, 160, 0]*/
/*                         }, function () {*/
/* */
/*                             // use the Jcrop API to get the real image size*/
/*                             var bounds = this.getBounds();*/
/*                             boundx = bounds[0];*/
/*                             boundy = bounds[1];*/
/* */
/*                             // Store the Jcrop API in the jcrop_api variable*/
/*                             jcrop_api = this;*/
/*                         });*/
/* */
/* */
/*                 };*/
/*             };*/
/* */
/*             // read selected file as DataURL*/
/*             oReader.readAsDataURL(oFile);*/
/*         }*/
/* */
/*     </script>*/
/*     <script>*/
/*         $(document).ready(function() {//start document ready*/
/*             $('#avatar_form').on('submit', function(e) {*/
/*                 e.preventDefault();*/
/*                 var form = $(this);*/
/*                 var formdata = false;*/
/*                 if (window.FormData){*/
/*                     formdata = new FormData(form[0]);*/
/*                 }*/
/*                 $.ajax({*/
/*                     url: form.attr('action'), // Le nom du fichier indiqué dans le formulaire*/
/*                     type: form.attr('method'), // La méthode indiquée dans le formulaire (get ou post)*/
/*                     data: formdata ? formdata : form.serialize(),*/
/*                     cache       : false,*/
/*                     contentType : false,*/
/*                     processData : false,*/
/*                     success: function(data) { // Je récupère la réponse du fichier PHP*/
/*                         if(data.valid) {*/
/*                             $(".{{ avatarType }} .avatar_id"  , window.parent.document).val(data.imageId);*/
/*                             $(".{{ avatarType }} .avatar_img", window.parent.document).attr("src", data.imageUrl);*/
/*                              window.parent.$('#pp_close').trigger('click');*/
/* */
/*                          }*/
/*                     }*/
/*                 });*/
/*             });*/
/*         });//end document ready*/
/*     </script>*/
/*     {% if valid %}*/
/*         <script>*/
/* */
/*         </script>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* {% block styles %}*/
/*     <link href="{{ asset('css/jcrop/jquery.Jcrop.css') }}" type="text/css" rel="stylesheet">*/
/* */
/*     <style type="text/css">*/
/*         img[src='Error.src']{*/
/*             display: none;*/
/*         }*/
/* */
/*         #target { background-color: #ccc; width: 500px; height: 330px; font-size: 24px; display: block; }*/
/*         div.upload {width: 64px;height: 28px;background: url({{ asset('images/upload.png') }});overflow: hidden;}*/
/*         div.upload input {display: block !important;width: 64px !important;height: 28px !important;opacity: 0 !important;overflow: hidden !important;}*/
/* */
/*     </style>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="titre_plugg">{{ 'Modification image'|trans }}</div>*/
/*     <div class="clear20"></div>*/
/*     <div style="display: none;" id="dialog">*/
/*         <div class="message error"></div>*/
/*     </div>*/
/*     <div style="padding:10px">*/
/*         <!-- upload form -->*/
/*         {{ form_start(form, { 'action': path('eplugg_upload_avatar', {'avatarType': avatarType } ), 'attr': {'id': 'avatar_form' } } ) }}*/
/* */
/*             <table width="100%">*/
/*                 <tbody>*/
/*                 <tr>*/
/*                     <td colspan="2">*/
/*                         <div class="upload">*/
/*                             {{ form_widget(form.file, {'id': 'image_file', 'attr': {'class': '', 'onchange': 'fileSelectHandler()' }}) }}*/
/*                         </div>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         <table>*/
/*                             <tbody>*/
/*                             <tr>*/
/*                                 <td>*/
/*                                     <div style="float: left ;overflow: hidden; width: 200px; height: 200px "*/
/*                                          id="div_preview">*/
/*                                         <img  class="content_image" src="{{ asset('images/avatar.png') }}" id="demo">*/
/*                                     </div>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>*/
/*                                     <div align="right" style="display:none" id="divSubmit">*/
/* */
/*                                         <input type="submit" class="btn btn-large btn-inverse" id="save_image" value="{{ 'Enregistrer'|trans }}">*/
/*                                     </div>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div id="response">*/
/*                             <img class="content_image" src="" id="preview" style="display: none">*/
/* */
/*                         </div>*/
/*                     </td>*/
/*                 </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*             <!-- hidden crop params -->*/
/*             {{ form_widget(form.startWidth, {'id': 'x1'}) }}*/
/*             {{ form_widget(form.startHeight, {'id': 'y1'}) }}*/
/*             {{ form_widget(form.endWidth, {'id': 'x2'}) }}*/
/*             {{ form_widget(form.endHeight, {'id': 'y2'}) }}*/
/* */
/*         {{ form_end(form) }}*/
/* */
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
