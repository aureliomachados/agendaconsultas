
<li class="nav-item">
    <a href="{{ route('consultas.index') }}"
       class="nav-link {{ Request::is('consultas*') ? 'active' : '' }}">
        <p>Consultas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('articles.index') }}"
       class="nav-link {{ Request::is('articles*') ? 'active' : '' }}">
        <p>Articles</p>
    </a>
</li>


