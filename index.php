<!DOCTYPE html>
<html>
        $requirement4 = "<span class='label label-success'>Aktif</span>";
    }

    if (!extension_loaded('openssl')) {
        $error = true;
        $requirement5 = "<span class='label label-warning'>Pasif</span>";
    } else {
        $requirement5 = "<span class='label label-success'>Aktif</span>";
    }

    if (!extension_loaded('mbstring')) {
        $error = true;
        $requirement6 = "<span class='label label-warning'>Pasif</span>";
    } else {
        $requirement6 = "<span class='label label-success'>Aktif</span>";
    }

    if (!extension_loaded('iconv') && !function_exists('iconv')) {
        $error = true;
        $requirement7 = "<span class='label label-warning'>Pasif</span>";
    } else {
        $requirement7 = "<span class='label label-success'>Aktif</span>";
    }

    if (!extens
        $requirement9 = "<span class='label label-warning'>Pasif</span>";
    } else {
        $requirement9 = "<span class='label label-success'>Aktif</span>";
    }

    if (!extension_loaded('zip')) {
        $error = true;
        $requirement10 = "<span class='label label-warning'>Zip uzantısı etkin değil</span>";
    } else {
        $requirement10 = "<span class='label label-success'>Aktif</span>";
    }

    $url_f_open = ini_get('allow_url_fopen');
    if ($url_f_open != "1" && $url_f_open != 'On') {
        $error = true;
        $requirement11 = "<span class='label label-warning'>Allow_url_fopen etkin değil!</span>";
    } else {
        $requirement11 = "<span class='label label-success'>Aktif</span>";
    }

    ?>
    <div id="wrapper">
        <div class="logo">
            <a href=""><img src="logo.png" style="width: 250px;"></a>
        </div>
        <h1><a href="">Uygulama Adı</a> - Sistem Gereksinimleri</h1>
        <div id="loader">
            <span class="dot dot_1"></span>
            <span class="dot dot_2"></span>
            <span class="dot dot_3"></span>
            <span class="dot dot_4"></span>
        </div>
        <table class="table table-hover" id="requirements" style="display:none;">
            <thead>
                <tr>
                    <th>Gereksinimler</th>
                    <th>Sonuçlar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PHP 7.1+ </td>
                    <td><?php echo $requirement1; ?></td>
                </tr>
                <tr>
                    <td>MySQLi PHP Extension</td>
                    <td><?php echo $requirement2; ?></td>
                </tr>
                <tr>
                    <td>PDO PHP Extension</td>
                    <td><?php echo $requirement3; ?></td>
                </tr>
                <tr>
                    <td>cURL PHP Extension</td>
                    <td><?php echo $requirement4; ?></td>
                </tr>
                <tr>
                    <td>OpenSSL PHP Extension</td>
                    <td><?php echo $requirement5; ?></td>
                </tr>
                <tr>
                    <td>MBString PHP Extension</td>
                    <td><?php echo $requirement6; ?></td>
                </tr>
                <tr>
                    <td>iconv PHP Extension</td>
                    <td><?php echo $requirement7; ?></td>
                </tr>
                <tr>
                    <td>GD PHP Extension</td>
                    <td><?php echo $requirement9; ?></td>
                </tr>
                <tr>
                    <td>Zip PHP Extension</td>
                    <td><?php echo $requirement10; ?></td>
                </tr>
                <tr>
                    <td>allow_url_fopen</td>
                    <td><?php echo $requirement11; ?></td>
                </tr>
            </tbody>
        </table>

    </div>
    <script>
        var loading = {
            complete: function () {
                var loading = document.getElementById("loader");
                loading.remove(loading);
            }
        };
        document.addEventListener("readystatechange", function () {
            if (document.readyState === "complete") {
                setTimeout(function(){
                    loading.complete();
                    var requirements = document.getElementById("requirements");
                    requirements.style['display'] = null;
                },3000);
            }
        });
    </script>
</body>
</html>
