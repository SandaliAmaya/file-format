@include('components.header')
<body>
<main class="container">
    <header>Update File Format</header>
    <div class="form input-box">
        <label>File Format Name</label>
        <input type="text" id="file-format-name"/>
    </div>
    <div id="sort-it" class="form">
        <label>Columns</label>
        <ol id="columns"></ol>
        <button id="update">Update</button>
    </div>
</main>
<script src="https://johnny.github.io/jquery-sortable/js/jquery-sortable-min.js"></script>
<script src="{{ asset('js/common-functions.js') }}"></script>
<script src="{{ asset('js/file-format/single-view.js') }}"></script>
</body>
</html>
