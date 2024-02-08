<!doctype html>
<html lang="en">

<head>
    @include('components.app.header')
</head>

<body>
    <section>
        <div id="layout-wrapper">

            <div id="topbar">
                @include('components.app.topbar')
            </div>

            <div id="leftbar">
                @include('components.app.leftbar')
            </div>

            <div id="content">
                @yield('content')
            </div>

            <div id="footer">
                @include('components.app.footer')
            </div>

            <div id="rightbar">
                @include('components.app.rightbar')
            </div>
        </div>
    </section>

    <script>
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            content_css: "//www.tiny.cloud/css/codepen.min.css",
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>

</body>

<div id="script">
    @include('components.app.script')
</div>

</html>