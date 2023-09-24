@include('components.header')
<body>
<section class="container">
    <div class="heading">
        <header>File Formats</header>
        <button class="btn-create-new" id="create-new">Create New Format</button>
    </div>
    <div>
        <table id="file-format-table">
            <thead>
            <tr>
                <td>File Format Name</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</section>

<script src="{{ asset('js/common-functions.js') }}"></script>
<script src="{{ asset('js/file-format/table.js') }}"></script>

</body>
</html>
