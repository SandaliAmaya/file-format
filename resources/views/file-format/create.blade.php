@include('components.header')
<body>
    <section class="container">
        <header>Create New File Format</header>
        <form action="#" class="form">
            <div class="input-box">
                <label>File Format Name</label>
                <input id="new-format-name" type="text" placeholder="Enter format name" required />
            </div>
            <div class="input-box">
                <label>Columns</label>
                <dl class="dropdown">
                    <dt>
                        <a href="#">
                            <span class="hida">Select Columns</span>
                            <p class="multiSel"></p>
                        </a>
                    </dt>

                    <dd>
                        <div class="mutliSelect">
                            <ul>
                                <li>
                                    <input id="input-checkbox" type="checkbox" value="id" /><span>id</span></li>
                                <li>
                                    <input id="input-checkbox" type="checkbox" value="name" />name</li>
                                <li>
                                    <input id="input-checkbox" type="checkbox" value="description" />description</li>
                                <li>
                                    <input id="input-checkbox" type="checkbox" value="ref_code" />ref_code</li>
                                <li>
                                    <input id="input-checkbox" type="checkbox" value="vendor" />vendor</li>
                                <li>
                                    <input id="input-checkbox" type="checkbox" value="brand" />brand</li>
                            </ul>
                        </div>
                    </dd>
                </dl>
            </div>


            <button id="create">Create New Format</button>
            <button id="view" class="secondary">View Existing Formats</button>
        </form>
    </section>

    <script src="{{ asset('js/common-functions.js') }}"></script>
    <script src="{{ asset('js/file-format/create.js') }}"></script>

</body>
</html>
