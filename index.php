<?php
$webName = "FICODE";
$title = "Membuat Navbar";

$html = <<<HTML
<nav class="header">
  <a class="btn-home" href="#">Home</a>
  <a class="brand" href="#">FERI IRAWAN</a>
</nav>
HTML;

$css = <<<CSS
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  text-decoration: none;
}
.header {
  background: #ff0088;
  display: flex;
  justify-content: space-between;
}
.header > a {
  padding: 1rem;
  display: inline-block;
  font-weight: bold;
  font-size: 1.2rem;
}
.header .btn-home {
  background: #444444;
  color: #fff;
  padding-right: 2rem;
  clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%);
}
.header .brand {
  color: #fff;
}
CSS;

$js = <<<JS

JS;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?=$webName ." - ". $title?></title>

<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/codemirror.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/theme/dracula.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/theme/monokai.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/fold/foldgutter.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/lint/lint.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/dialog/dialog.min.css" type="text/css" media="all" />

<!-- JQUERY -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<!-- MODE -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/mode/htmlmixed/htmlmixed.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/mode/xml/xml.min.js"></script>
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/mode/clike/clike.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/mode/php/php.min.js"></script>
-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/mode/css/css.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/mode/javascript/javascript.min.js"></script>

<!-- ADDON -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/selection/active-line.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/edit/matchbrackets.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/display/placeholder.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/fold/foldcode.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/fold/foldgutter.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/fold/brace-fold.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/fold/xml-fold.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/fold/comment-fold.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/lint/lint.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/dialog/dialog.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/search/search.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/search/searchcursor.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/search/jump-to-line.min.js"></script>
<!-- <script src=""></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/lint/css-lint.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.0/addon/lint/javascript-lint.min.js"></script>

<script src="https://unpkg.com/jshint@2.9.6/dist/jshint.js"></script>
<script src="https://unpkg.com/jsonlint@1.6.3/web/jsonlint.js"></script>
<script src="https://unpkg.com/csslint@1.0.5/dist/csslint.js"></script>


<style>
:root {
  font-size: 12px;
}
.code-editor {
  position: relative;
  width: 100%;
  height: 300px;
}
.code-editor > * {
  height: 100%;
}
.btn-tab.active,
#btn-result:checked ~ label.btn-tab {
  background: var(--bs-dark) !important;
  color: #fff !important;
}
.nav-tabs {
  border: none !important;
}
.nav-tabs .btn-tab {
  border: 1px solid var(--bs-dark) !important;
}
.nav-tabs .btn-tab:first-child {
  border-radius: 4px 0 0 0 !important;
}
.nav-tabs .btn-tab:nth-child(even) {
 border-left: none !important;
 border-right: none !important;
}
.nav-tabs .btn-tab {
  border-radius: 0px !important;
  border-top: 1px solid var(--bs-dark) !important;
}
.nav-tabs .btn-tab:last-child {
  border-left: none !important;
  border-bottom: none !important;
  border-radius: 0 4px 0 0 !important;
}
.tab-pane {
  overflow: hidden;
  border-radius: 0px 4px 4px 4px;
}
.tab-content .hide {
  height: 0;
}
.form-select:hover {
  border-color: #51585e;
  box-shadow: 0 0 0 0.25rem rgba(130, 138, 145, 0.5);
}
#result {
  height: 300px;
}
</style>
</head>
<body>
 
<header class="navbar navbar-dark bg-dark mb-3">
  <div class="container">
    <a href="#" class="navbar-brand">FICODE</a>
  </div>
</header>
<section class="container">
  <main id="one">
    <form id="form-code">
      <!-- Code Box -->
      <nav>
        <div class="nav nav-tabs">
          <button class="btn-outline-secondary nav-link btn-tab active" data-bs-toggle="tab" data-bs-target="#html-box" type="button">HTML</button>
          <!-- <button class="btn-outline-secondary nav-link btn-tab" data-bs-toggle="tab" data-bs-target="#php-box" type="button">PHP</button> -->
          <button class="btn-outline-secondary nav-link btn-tab" data-bs-toggle="tab" data-bs-target="#css-box" type="button">CSS</button>
          <button class="btn-outline-secondary nav-link btn-tab" data-bs-toggle="tab" data-bs-target="#js-box" type="button">JavaScript</button>
          <input checked type="checkbox" class="btn-check" id="btn-result" autocomplete="off">
          <label class="d-flex align-items-center btn btn-outline-secondary btn-tab" for="btn-result">
            Result
          </label>
        </div>
      </nav>
      <div class="tab-content">
        <div class="tab-pane show active" id="html-box">
          <div class="code-editor">
            <textarea id="html" name="html" class="form-control" placeholder="Write HTML.."><?= $html ?></textarea>
          </div>
        </div>
        <!--
        <div class="tab-pane hide active" id="php-box">
          <div class="code-editor">
            <textarea id="php" name="php" class="form-control" placeholder="Write PHP.."></textarea>
          </div>
        </div>
        -->
        <div class="tab-pane hide active" id="css-box">
          <div class="code-editor">
            <textarea id="css" name="css" class="form-control" placeholder="Write CSS.."><?= $css ?></textarea>
          </div>
        </div>
        <div class="tab-pane hide active" id="js-box">
          <div class="code-editor">
            <textarea id="js" name="js" class="form-control" placeholder="Write JavaScript.." value="<?=$js?>"></textarea>
          </div>
        </div>
      </div>
      
    
      <!-- Action -->
      <div class="input-group mt-3">
        <div class="input-group-text">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M8.997 13.985c.01 1.104-.88 2.008-1.986 2.015-1.105.009-2.005-.88-2.011-1.984-.01-1.105.879-2.005 1.982-2.016 1.106-.007 2.009.883 2.015 1.985zm-.978-3.986c-1.104.008-2.008-.88-2.015-1.987-.009-1.103.877-2.004 1.984-2.011 1.102-.01 2.008.877 2.012 1.982.012 1.107-.88 2.006-1.981 2.016zm7.981-4.014c.004 1.102-.881 2.008-1.985 2.015-1.106.01-2.008-.879-2.015-1.983-.011-1.106.878-2.006 1.985-2.015 1.101-.006 2.005.881 2.015 1.983zm-12 15.847c4.587.38 2.944-4.492 7.188-4.537l1.838 1.534c.458 5.537-6.315 6.772-9.026 3.003zm14.065-7.115c1.427-2.239 5.846-9.748 5.846-9.748.353-.623-.429-1.273-.975-.813 0 0-6.572 5.714-8.511 7.525-1.532 1.432-1.539 2.086-2.035 4.447l1.68 1.4c2.227-.915 2.868-1.04 3.995-2.811zm-12.622 4.806c-2.084-1.82-3.42-4.479-3.443-7.447-.044-5.51 4.406-10.03 9.92-10.075 3.838-.021 6.479 1.905 6.496 3.447l1.663-1.456c-1.01-2.223-4.182-4.045-8.176-3.992-6.623.055-11.955 5.466-11.903 12.092.023 2.912 1.083 5.57 2.823 7.635.958.492 2.123.329 2.62-.204zm12.797-1.906c1.059 1.97-1.351 3.37-3.545 3.992-.304.912-.803 1.721-1.374 2.311 5.255-.591 9.061-4.304 6.266-7.889-.459.685-.897 1.197-1.347 1.586z"/></svg>
        </div>
        
        <select id="theme" class="form-select">
          <option value="dracula" selected>Dracula</option>
          <option value="monokai">Monokai</option>
          <option value="default">Default</option>
        </select>
        
        <input type="checkbox" class="btn-check" id="btn-wrap" autocomplete="off">
        <label class="btn btn-outline-secondary" for="btn-wrap">
          <svg width="18" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M3,7.2h18c0.6,0,1-0.4,1-1s-0.4-1-1-1H3c-0.6,0-1,0.4-1,1S2.4,7.2,3,7.2z M9,15.2H3c-0.6,0-1,0.4-1,1s0.4,1,1,1h6 c0.6,0,1-0.4,1-1S9.6,15.2,9,15.2z M18.5,10.2H3c-0.6,0-1,0.4-1,1s0.4,1,1,1h15.5c0.8,0,1.5,0.7,1.5,1.5s-0.7,1.5-1.5,1.5h-2.8 c0.3-0.4,0.4-0.9,0-1.3c-0.4-0.4-1-0.5-1.4-0.1l-2,1.7c0,0-0.1,0.1-0.1,0.1c-0.4,0.4-0.3,1.1,0.1,1.4l2,1.7c0.2,0.1,0.4,0.2,0.6,0.2 c0.3,0,0.6-0.1,0.8-0.4c0.3-0.4,0.3-0.9,0-1.3h2.8c1.9,0,3.5-1.6,3.5-3.5S20.4,10.2,18.5,10.2z"/></svg>
        </label>
        
        <select name="viewport" id="viewport" class="form-select">
          <option value="1.0">1.0x</option>
          <option value="0.5">0.5x</option>
          <option value="0.25">0.25x</option>
        </select>
        
        <button id="btn-run" type="submit" class="btn btn-primary">Run</button>
      </div>
    </form>
  </main>
  
  <main id="two">
    <iframe class="border mt-3 rounded shadow bg-white w-100" id="result"></iframe>
  </main>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Ini default pada form
//$("#html").val()
//$("#css").val()
//$("#js").val()

// Menjalankan fungsi Editor untuk membuat form editor
Editor("html", "theme", "html");
//Editor("php", "theme", "php");
Editor("css", "theme", "css");
Editor("js", "theme", "javascript");

compile();

// Toggle untuk class "hide"
customitation();

// Editor function
function Editor(idEditor, idTheme, lang) {
  var container = document.getElementById(idEditor);
  var inputTheme = $("#" + idTheme),
      btnWrap = $("#btn-wrap");
  
  if(lang == "html") {
    var mixedMode = {
        name: "htmlmixed",
        scriptTypes: [{
            matches: /\/x-handlebars-template|\/x-mustache/i,
            mode: null
          },
          {
            matches: /(text|application)\/(x-)?vb(a|script)/i,
            mode: "vbscript"
          }]
      };
    lang = mixedMode;
  }
  /* if (lang == "php") {
    lang = "application/x-httpd-php";
  } */
  
  var editor = CodeMirror.fromTextArea(container, {
      lineNumbers: true,
      tabSize: 2,
      styleActiveLine: true,
      lint: true,
      matchBrackets: true,
      mode: lang,
      theme: inputTheme.val(),
      extraKeys: {
        "Ctrl-Q": function(cm){
          cm.foldCode(cm.getCursor());
        },
        "Ctrl-Enter": function (cm) {
          cm.setOption("lineWrapping", true);
          btnWrap.prop("checked", true).css("color", "white");
        },
        "Ctrl-Alt-Enter": function (cm) {
          cm.setOption("lineWrapping", false);
          btnWrap.prop("checked", false);
        }
      },
      foldGutter: true,
      gutters: ["CodeMirror-lint-markers", "CodeMirror-linenumbers", "CodeMirror-foldgutter"]
    });
  
  inputTheme.on("change", function () {
    editor.setOption("theme", inputTheme.val());
    console.log(inputTheme.val());
  });
  
  btnWrap.click(function () {
    if ($(this).prop("checked")) {
      editor.setOption("lineWrapping", true);
    } else {
      editor.setOption("lineWrapping", false);
    }
  });
  
}

// Compile function
function compile(options) {
  var html = document.getElementById("html");
  var css = document.getElementById("css");
  var js = document.getElementById("js");
  var code = document.getElementById("result").contentWindow.document;
 
  $(document).ready(function () {
    $("#btn-run").click()
  });
  
  /**
   * Melakukan compile
   */
  $("#form-code").submit(function (e) {
    var viewport = e.target.viewport.value;
    console.log(viewport);
  
    code.open();
    code.writeln(
        html.value +
        `<style>
          :root {
            font-size: `+viewport+`em;
          }` +
        css.value +
        "</style>" +
        "<script>" +
        js.value +
        "<"+"/script>"
    );
    code.close();
    
    e.preventDefault()
  });
}

// Customitation function
function customitation() {
  // menghapus class "hide" jika .nav-tabs > button di klik
  $(".nav-tabs button").data("bs-toggle", "tab").click(function () {
    let target = $(this).data("bs-target");
    $(".tab-content .tab-pane").addClass("hide");
    $(target).removeClass("hide");
  });
  
  $("#btn-result").click( function () {
    let btnResult = $(this).prop("checked");
    let result = $("#result");
    if (btnResult == true) {
      result.toggle("fast");
    } else {
      result.toggle("fast");
    }
    
  });
}

</script> 
</body>
</html>