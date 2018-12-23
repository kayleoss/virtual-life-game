<ul class="nav justify-content-center pt-2 pb-2 light-transparent-background">
    <li class="nav-item">
        <a class="nav-link" href="/market">Market</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/trade">Trade</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/chat">Chat Rooms</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/users">Users</a>
    </li>
    <?php if ($player): ?>
    <li class="nav-item">
        <a class="nav-link" href="/profile/<?= $player->id ?>">Profile</a>
    </li>
    <?php else: ?>
    <li class="nav-item">
        <a class="nav-link" href="/signup">Signup</a>
    </li>
    <?php endif; ?>
</ul>