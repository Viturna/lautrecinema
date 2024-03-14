<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../src/css/reset.css" rel="stylesheet">
    <link href="../src/css/style.css" rel="stylesheet">
    <link href="../src/css/episodes.css" rel="stylesheet">
</head>
<body>
    <?php
    include_once '../header.php';
    require_once '../config.php';

    $recents = mysqli_query($connexion, "SELECT * FROM video Where idVid = 2");
    ?>
    <main class="grid-2">
        <?php
        foreach ($recents as $recent) {
            $title = $recent["titleVid"];
            $description = $recent["descriptionVid"];
            $img = $recent["imgVid"];
            $sources = $recent["sourcesVid"];
            $duree = $recent["timeVid"];
            $duree_timestamp = strtotime($duree);
            $duree_datetime = new DateTime("@$duree_timestamp");
            $url = $recent["urlVid"];
        ?>
            <div class="col-episode">
                <div class="video">
                    <div class="infos title-video">
                        <h3><?php echo $title; ?></h3>
                    </div>
                    <div class="infos duree-video">
                        <svg width="25" height="25" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0064 0C6.29065 0 0 6.28174 0 13.9962C0 21.7106 6.29192 28 14.0064 28C21.7208 28 28 21.7106 28 13.9962C28 6.28174 21.7208 0 14.0064 0ZM14.0064 2.54476C15.5108 2.54225 17.0009 2.83675 18.3912 3.41138C19.7816 3.986 21.0448 4.82945 22.1084 5.89335C23.1721 6.95725 24.0153 8.22066 24.5896 9.61113C25.1639 11.0016 25.4581 12.4918 25.4552 13.9962C25.4583 15.501 25.1643 16.9916 24.5901 18.3826C24.0159 19.7736 23.1729 21.0375 22.1093 22.1021C21.0457 23.1666 19.7825 24.0108 18.392 24.5862C17.0015 25.1616 15.5112 25.4569 14.0064 25.4552C12.5009 25.4571 11.0099 25.162 9.61861 24.5868C8.22736 24.0116 6.96322 23.1676 5.89858 22.1032C4.83394 21.0388 3.9897 19.7749 3.4142 18.3837C2.83871 16.9926 2.54325 15.5016 2.54476 13.9962C2.54476 7.65718 7.66736 2.54476 14.0064 2.54476ZM13.986 5.07171C13.8178 5.07336 13.6516 5.10833 13.4971 5.17461C13.3425 5.24089 13.2026 5.33716 13.0854 5.45785C12.9683 5.57853 12.8762 5.72125 12.8146 5.87774C12.753 6.03423 12.723 6.20138 12.7263 6.36954V13.9962C12.727 14.1636 12.7608 14.3293 12.8256 14.4836C12.8905 14.638 12.9852 14.778 13.1042 14.8958L18.1938 19.9878C18.3115 20.109 18.4522 20.2055 18.6076 20.2717C18.763 20.3379 18.93 20.3725 19.099 20.3734C19.2679 20.3744 19.4353 20.3417 19.5915 20.2773C19.7476 20.2129 19.8894 20.118 20.0085 19.9982C20.1276 19.8785 20.2217 19.7362 20.2852 19.5796C20.3488 19.4231 20.3805 19.2555 20.3786 19.0866C20.3766 18.9177 20.3411 18.7508 20.274 18.5958C20.2069 18.4408 20.1096 18.3006 19.9878 18.1836L15.2737 13.4694V6.36954C15.2771 6.19902 15.2462 6.02956 15.1828 5.87122C15.1194 5.71288 15.0249 5.5689 14.9048 5.44783C14.7847 5.32676 14.6414 5.23108 14.4836 5.16646C14.3258 5.10185 14.1565 5.06963 13.986 5.07171Z" fill="#FCF4F0"/>
                        </svg>
                        <p><?php echo $duree_datetime->format('i:s'); ?></p>
                    </div>
                </div>
                <h3>Description</h3>
                <p><?php echo $description ?></p>
                <h3>Sources</h3>
                <p><?php echo $sources ?></p>
            </div>


            
            <!-- <iframe width="100%" height="100%" src="" frameborder="0" allowfullscreen></iframe> -->

        <?php
        }
        ?>
    </main>
    
</body>
</html>