<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="/">Healing Minds</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" href="/forum">LiveChatForum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/moods">MoodTracker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/doctors" >Find Psikiater</a>
        </li>
        <?php $admin = auth()->user(); ?>
        @if ($admin && $admin->id == '1')
            <li class="nav-item">
                <a class="nav-link" href="/article">Manage Article</a>
            </li>
        @endif
      </ul>

      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php $ava = auth()->user()->avatar; ?>
            <img class="small-img img-fluid" src="{{ asset($ava) }}" width="50" height="50" alt="..."  />
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/profile/edit"><i class="bi bi-layout-text-sidebar-reverse"></i> Edit Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf 
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>

          

        </li>

        @endauth
      </ul>
      
    </div>
  </div>
</nav>