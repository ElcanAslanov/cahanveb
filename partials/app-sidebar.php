<div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">CAHAN</h3>
            <div class="dashboard_sidebar_user">
                <img src="./images/user/user1.jpg" alt="User image." id="userImage"/>
                <span><?= $user['name'] .' '.$user['username'] ?></span>     
        </div>
        <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_list">
               <!-- class="menuActive" -->
               
    <li>
        <a href="./dashboard.php" id="aboutUs"><i class="fa fa-dashboard "></i><span class="menuText"> Haqqımızda</span></a>
        <ul class="dashboard_menu_list-alt-bolum" id="aboutUsSubMenu" style="display:none;">
            <li>
                <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Təsisçinin müraciəti</span></a>
            </li>
            <li>
                <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Tarixçə</span></a>
            </li>
            <li>
                <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Fəxri Prezident</span></a>
            </li>
            <li>
                <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Vizyon və Missiya</span></a>
            </li>
            <li>
                <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Təşkilati Struktur</span></a>
            </li>
            <li>
                <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Dünyada Cahan</span></a>
            </li>
            <li>
                <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Korporativ Kimlik</span></a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#" id="activityAreas"><i class="fa fa-building "></i><span class="menuText"> Fəaliyyət Sahələri</span></a>
        <ul class="dashboard_menu_list-alt-bolum" id="activityAreasSubMenu" style="display:none;">
            <li>
                <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Sektorlar</span></a>
            </li>
            <li>
                <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Şirkətlər</span></a>
            </li>
            <li>
                <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Brendlər</span></a>
            </li>
            <li>
                <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Dünya Ofisləri</span></a>
            </li>
            <li>
                <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Tərəfdaşlar</span></a>
            </li>
            <li>
                <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Layihələr</span></a>
            </li>
        </ul>
    </li>
        </li>

        <li>
    <a href="#" id="investors"><i class="fa fa-th "></i><span class="menuText"> İnvestorlar</span></a>
    <ul class="dashboard_menu_list-alt-bolum" id="investorsSubMenu" style="display:none;">
        <li>
            <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Maliyyə Vəziyyəti</span></a>
        </li>
        <li>
            <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Maliyyə Tərəfdaşları</span></a>
        </li>
    </ul>
</li>
<li>
    <a href="#" id="socialResponsibility"><i class="fa fa-archive "></i><span class="menuText"> Sosial Məsuliyyət</span></a>
    <ul class="dashboard_menu_list-alt-bolum" id="socialResponsibilitySubMenu" style="display:none;">
        <li>
            <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> KSM</span></a>
        </li>
        <li>
            <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Tədbirlər</span></a>
        </li>
        <li>
            <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Sponsorluq</span></a>
        </li>
    </ul>
</li>

<li>
    <a href="#" id="news"><i class="fa fa-shopping-cart "></i><span class="menuText"> Xəbərlər</span></a>
    <ul class="dashboard_menu_list-alt-bolum" id="newsSubMenu" style="display:none;">
        <li>
            <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Gündəlik Xəbərlər</span></a>
        </li>
        <li>
            <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Media Arxivi</span></a>
        </li>
    </ul>
</li>

<li>
    <a href="#" id="humanResources"><i class="fa fa-users "></i><span class="menuText"> İnsan Resursları</span></a>
    <ul class="dashboard_menu_list-alt-bolum" id="humanResourcesSubMenu" style="display:none;">
        <li>
            <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> İnsan Resursları Siyasəti</span></a>
        </li>
        <li>
            <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> Vakansiyalar</span></a>
        </li>
        <li>
            <a href="./dashboard.php"><i class="fa fa-dashboard2 "></i><span class="menuText"> CV Göndər</span></a>
        </li>
    </ul>
</li>

        <li>
        <a href="./elaqeadmin.php"><i class="fa fa-user-plus "></i><span class="menuText"> Əlaqə</span> </a>
         </li>
</ul>
        
        
    <script>
    // Haqqımızda menüsü için
    document.getElementById('aboutUs').addEventListener('click', function(e) {
        e.preventDefault();
        var subMenu = document.getElementById('aboutUsSubMenu');
        if (subMenu.style.display === 'none') {
            subMenu.style.display = 'block';
        } else {
            subMenu.style.display = 'none';
        }
    });

    // Fəaliyyət Sahələri menüsü için
    document.getElementById('activityAreas').addEventListener('click', function(e) {
        e.preventDefault();
        var subMenu = document.getElementById('activityAreasSubMenu');
        if (subMenu.style.display === 'none') {
            subMenu.style.display = 'block';
        } else {
            subMenu.style.display = 'none';
        }
    });

    
    // İnvestorlar menüsü için
    document.getElementById('investors').addEventListener('click', function(e) {
        e.preventDefault();
        var subMenu = document.getElementById('investorsSubMenu');
        if (subMenu.style.display === 'none') {
            subMenu.style.display = 'block';
        } else {
            subMenu.style.display = 'none';
        }
    });

     // sosial mesuliyyet menüsü için
     document.getElementById('socialResponsibility').addEventListener('click', function(e) {
        e.preventDefault();
        var subMenu = document.getElementById('socialResponsibilitySubMenu');
        if (subMenu.style.display === 'none') {
            subMenu.style.display = 'block';
        } else {
            subMenu.style.display = 'none';
        }
    });
     // xeberler menüsü için
     document.getElementById('news').addEventListener('click', function(e) {
        e.preventDefault();
        var subMenu = document.getElementById('newsSubMenu');
        if (subMenu.style.display === 'none') {
            subMenu.style.display = 'block';
        } else {
            subMenu.style.display = 'none';
        }
    });
     // insan resurslari menüsü için
     document.getElementById('humanResources').addEventListener('click', function(e) {
        e.preventDefault();
        var subMenu = document.getElementById('humanResourcesSubMenu');
        if (subMenu.style.display === 'none') {
            subMenu.style.display = 'block';
        } else {
            subMenu.style.display = 'none';
        }
    });

</script>

            </div>