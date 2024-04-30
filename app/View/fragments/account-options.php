<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<a href="" class="loginSign py-0 px-2 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    <div class="">
        <span class="text-white">Hello, <span class="badge text-bg-light"><?php echo $_SESSION['FirstName']; ?></span></span>
    </div>
    <span class="text-white small">
        Account & Options
    </span>
</a>
<div class="dropdown-menu ms-1 drop-menu">
    <div class="row p-2">
        <div class="col-lg-6 border-end">
            <ul class="list-group list-group-flush">
                <li class="list-group-item small text-center rounded-2 mt-2 list-item">
                    <a class="text-white text-decoration-none" href="#/">Orders</a>
                </li>
                <li class="list-group-item small text-center rounded-2 mt-2 list-item">
                    <a class="text-white text-decoration-none" href="../public/wish.php">Wishes</a>
                </li>
                <li class="list-group-item small text-center rounded-2 mt-2 list-item">
                    <a class="text-white text-decoration-none" href="../public/cart.php">Cart List</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item small text-center rounded-2 mt-2 list-item">
                    <a class="text-white text-decoration-none" href="#/">Account</a>
                </li>
                <li class="list-group-item small text-center rounded-2 mt-2 list-item">
                    <a class="text-white text-decoration-none" href="../public/addresses.php">Addresses</a>
                </li>
                <li class="list-group-item small text-center rounded-2 mt-2 list-item">
                    <a class="text-white text-decoration-none" href="#/">Payments</a>
                </li>
                <li class="list-group-item small text-center rounded-2 mt-2 list-item">
                    <a class="text-white text-decoration-none" href="#/">Support</a>
                </li>
            </ul>
        </div>
    </div>
    <form action="../app/View/components/logout.php" method="post" name="logoutForm" class="text-center border-top">
        <button name="Submit" value="Logout" class="btn mt-2 w-75 text-white serHoverBtn" type="submit">Logout</button>
    </form>
</div>