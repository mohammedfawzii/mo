<div class="projects">
    <div class="main-project">
        <div id='btns' class="btns-pro">
            <button class="btn-pro active">all projects</button>

            <button class="btn-pro">html&Css</button>
            <button class="btn-pro">js</button>
            <button class="btn-pro">laravel</button>

        </div>
        <div class="view-projects">
            @foreach ($Project as $item)
            <div class="img-pro" data-filter="{{ $item->section }}"><img src="{{ $item->img }}" alt=""></div>
            @endforeach
            <div class="img-pro" data-filter="html&css"><img src="{{ asset('assets/web/img/pro-1.png') }}" alt=""></div>
            <div class="img-pro" data-filter="html&css"><img  src="{{ asset('assets/web/img/proj-2.png') }}" alt=""></div>
            <div class="img-pro" data-filter="html&css"><img src="{{ asset('assets/web/img/proj-3.png') }}" alt=""></div>
            <div class="img-pro" data-filter="laravel"><img  src="{{ asset('assets/web/img/proj-4.png') }}" alt=""></div>
            <div class="img-pro" data-filter="laravel"><img  src="{{ asset('assets/web/img/proj-5.png') }}" alt=""></div>
            <div class="img-pro" data-filter="laravel"><img  src="{{ asset('assets/web/img/proj-6.png') }}" alt=""></div>
            <div class="img-pro" data-filter="laravel"><img  src="{{ asset('assets/web/img/proj-7.png') }}" alt=""></div>
            <div class="img-pro" data-filter="js"><img src="{{ asset('assets/web/img/proj-8.png') }}" alt=""></div>
            <div class="img-pro" data-filter="js"><img src="{{ asset('assets/web/img/proj-9.png') }}" alt=""></div>
            <div class="img-pro" data-filter="js"><img src="{{ asset('assets/web/img/proj-10.png') }}" alt=""></div>
            <div class="img-pro" data-filter="js"><img src="{{ asset('assets/web/img/proj-11.png') }}" alt=""></div>
            <div class="img-pro" data-filter="js"><img src="{{ asset('assets/web/img/proj-12.png') }}" alt=""></div>
            <div class="img-pro" data-filter="js"><img src="{{ asset('assets/web/img/proj-13.png') }}" alt=""></div>
        </div>
    </div>
</div>

<script>
    const liItem = document.querySelectorAll('.btns-pro button');
    const imgItem = document.querySelectorAll('.view-projects div');
    liItem.forEach(button => {
        button.onclick = function() {
        liItem.forEach(button => {
            button.className = "";
        })
        button.className = "active";

        //Filter
        const value = button.textContent;
        imgItem.forEach(div => {
            div.style.display = 'none';
            if (div.getAttribute('data-filter') == value.toLowerCase() || value == "all projects") {
                div.style.display = 'block';
            }
        })
       }
    });
</script>
