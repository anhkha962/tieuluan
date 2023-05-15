<header class="header body-pd" id="header">
    
    <div class="header_img">
        <p>Hello,
            <?php
                                if(isset($_SESSION['username'])){
                                        echo strtoupper($_SESSION['username']);
                                }
                                ?></p>
    </div>

</header>