<html>

<head>
    <meta charset="utf-8">
    <!--Tailwind Cdn link-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
</head>
<style>
    .select2.select2-container {
        width: 100% !important;
    }
</style>

<body>
    <div class="px-3">
        <div class="rounded border mx-auto mt-4">
           @include('Index/_tabbar')
            <div id="tab-contents">
               @include('Index/_config')
               @include('Index/_content')
               @include('Index/_customer')
               @include('Index/_sendMail')
               @include('Index/_process')
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>
<script>
    $(document).ready(function() {
        let tabsContainer = document.querySelector('#tabs');
        let tabTogglers = tabsContainer.querySelectorAll('#tabs a');
        tabTogglers.forEach(function(toggler) {
            toggler.addEventListener("click", function(e){
                e.preventDefault();
                let tabName = this.getAttribute('href');
                let tabContents = document.querySelector('#tab-contents');
                for (let i = 0; i < tabContents.children.length; i++) {
                    tabTogglers[i].parentElement.classList.remove("border-t","border-r","border-l","-mb-px","bg-white");
                    tabContents.children[i].classList.remove('hidden');
                    if("#" + tabContents.children[i].id == tabName) {
                        continue;
                    }
                    tabContents.children[i].classList.add("hidden");
                }
                e.target.parentElement.classList.add("border-t","border-r","border-l","-mb-px","bg-white");
            });
        });
    })
    $(document).ready(function() {
        $(".js-select2-multi").select2();
    })
</script>
