<?php
session_start();
if ($_SERVER['REQUEST_METHOD']== "POST") {
    include_once "../../Models/DBConnect.php";
    include_once "../../Models/AuthModel.php";
    include_once "../../Controller/AuthController.php";
    $uname = $_REQUEST['uname'];
    $password = $_REQUEST['psw'];

    $authController = new \App\Controller\AuthController();
    $authController->login($uname, $password);

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<div>
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>

    <body>
    <form action="" method="post">
        <table>
            <tr>
                <td colspan="4" style="text-align: center">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAdVBMVEXf3980SV7k5OPo5+bi4uIwRlwmP1YjPVUbOFErQlkdOVIyR13o6OcrQ1khPFQYNlCorbOzt7x4go1EVmjLzc+NlZ3Fx8rS09SAiZM8T2Pb29xxfIhOXm+WnaSytrtVZHRjcH6epKu8v8Nnc4BaaHeJkZp/iJKmTKaVAAAIXElEQVR4nO2daYOjIAyGFRAFz6rVntNj6vz/n7g6ztF2emg4rC7v9x37bCCEAIllT13W0D9AuQzh+GUIxy9DOH4ZwvHLEI5fhnD8MoTjlyEcvwzh+GUIxy+NhI7DWMhqhaHj6/usDkKfUZfz5e49XVTz+bz6WO+z0Ivc0NHwceWETujyLN3OcoIx+hEO0KpIqn3Iaaj4B6gldKi3qWYrjAgh1rUIQRjlh3UYMZW/QSGhT+PToQzQX7ZzzNqgx8qOFFpSFWHIs8MKP6T7pcTHNKKqnI8aQuatj93wviGtwzJS43hUEDL+UQY9+FpI/LbhKhjlE4bxxwr3xPtinGWR9J8jndCP30sQX8uY+FTyD5JNSJfH3uPzgpFUseShKpXQj6vHi0MH4Xwj14wyCdkyBw/QMzPirSdz5ZBI6KU3IheIcGFLjACkEfo8kWDAVsTay3OqsghDO0eyAGvhuSfph8kiZBtLzgj9QXyL5fwySYR0L9OAn0JHSZGqFEJ3HcgGrCdjzqQgyiB0U2k+5lyolIIogVCJBRsRKYjihOxdiQUboVzCoiFMyHbSncwZ4lF80RAldJbq+BrERHjRECWMSrnr4LVwJRqHCxLGM4VjtEU8CcaoYoR0oczL/GglmGwUInQ2qi1oNd5GbCoKEXLFk7AVXghNRRFCd6vBhLXIUmThFyB0NuonYUsotCoKEMaFjjHaCKcC/hROyD4UhaM3tHKHIHRX2gAttIU7GzAh1eRmWhEwIJyQ6ZqELeEBbEQooV4T1uMUCggn1MpXE4KNCCQMK70mrKWZMC51A6IFMAKHETp7fWvhl0gODGxghO6bVk/6KXyCHbvBCKn2WdgkNGAzEUQYfgxAaFmwYQoijI76B2k9TPegYQoiZIOYEDhMIYThehBCqwQNUwghTYYhDDLIXh9CyLUv961giz5oHmrKXlyLvEEmIoBwqGlYT0Suh5Buh1grGmFN89AdZDX8JISsiADCoRxN7WoqQM6tP6E/RFD6RQhZ8wGEG+07p2+RI+BMuD8hex/MhiQHONP+hOFiMELQ9gJgQ81ZtnMhwOWM/oT0MNRiUUemgFMoAOFAcXcjDIi9+xMOkaP5Idz1X/JHRggIagCEswEJAfk2Y8MXI9QyD6fvS6e/Hk4/pvkP4tLJ7y2mvz+c/h5/0DwNICVscm03NGC+tP+PNTnvOxrs3AJygQ9C6E3+7Gn654fTPwPWfC/xWxrP8f+DuxjD3KdZwd5dmDtRtzXIvTZAjgZOOP27idO/X2qzyd8Rtl3NfNrveWu/qw9/cAF+bxFqBUQH8Lsg+JuZudY3M/D3eWBCf/LvnmyWany7Fg1gQ63vD9eDvD/U+YZU5K3zGN4Bo6HeAf8Hb7n/g/f406+pYNvem2orBrtB62LYdpSrnYrBQuAZtxRC5fVphEvwCNcYCtXWGBKv2iahTpS6jMZr1ImqHepakUNFuYyidKZeWycpqdgmx4Ly6iZKKl16BngU2DGdS1rty5Xk2pfiZcy+9LL1S2UBvmwNWtFI5ldS6wgLF4Ju9aJ1hO2mFnQhpRb0PH7RWtD1SPUqYZ+K8428EdpIfk32Pj0R/hqQVN4r12S3GzPuherqO9IblijojeClJciOI+mN0CjkKay/haQo5lJqepSE8fsR94gACF6NqkdJo5Bn246DdZR9Zhp16xVE2l5BChsiqe73lN3v94Tafk90tP2eWvnM9bL1dpZb+Kxp13fPLjaCnl1dZo8fNn3X7M0+/aiqebX4WJ8y6kWUdXEtwk3oxAgZ33Ri/JTjtK3zPnvndf1XdL/hYqNY5HSN0kUR5J0sAVW0xrhYUCrwDfhNBW+XkNpRonKpbirx5lyk/kqy88AfARJSnhZfSzqxJDf3+VV8+MpwIVykHPgVCKFPne151zi0htyhfyonOv7G8HXUs3VAUUF/QifKEnQZkeGt1D1rK5aVl19BKMkAkV1fQodv3v4GY7iwZS/b3vpvNATqPteP0OG72ztcYr1LHamhm9xMMhN87MvYh9Dnm/s7+CCRGJ7wU3lvZ/LJ2GdOdCf0o2z2aLOAVmtJ3cQYvW3AH8Z6p9z9S50JqZ082wzh41JCEsnxUuvJ1pIEid157ehIyOi2QzKUoAMT3Oc5/FR0OOYhaEs7+rZOhPV/66rbjh1Z80hg/XcezfSrL63Sblm5LoTRrkfXv5qRuTA71oHgw5l+JZzvuiSunhMy5+kEvGIkh4z39qs+jddFvw91Sz4+I3S8Rf+ecSQ4riO3z7LFeLbt2D744kPW4ulQfULobmBtKQm2kj3v5gwcxu2qCGCHc7h4dgjwkNDhW3iOHmHrLfU5DR9NSoe58W5eb1PAnyF4+zjIeUQY7e5GFh2/jnCepFkcuSy8ykb4TtNSnu7nM0sA71OofOhx7hM6/CB0yPINiQKrSObr05LGnEe1OOeek+0Xh1mJRenab+DDAzPeJXQ3ggY8/wltes0q87woirxcERQ0KUZZf78x493ZeIfQ9wRm4H2RT8n/u49a7N4mlHOaq1U4X9723DcJpXX21SlC0pv3GG8QOnd2ny+vILkVZfwlpBJdjGah8kba7w+htDsjQ4igvyP1ilDmvZ9BhJPrFMclYbiUendrCKH8Kgd/QejuJfeeHkLXV8bOCeNq3CP0W0EV3yT045FPwV8FyVmA80PohMXYp+CvUBE614Qs65hrGofQKmOXhPQ0wjjtkQg50XPCSM1t+0GF0+iX0JuPMxB9rGDufRNOx4leCh/iljCeTROwRpzViJYfHafkRC/VPNqw3NFHoo+EcmpNaJ2/JVJMINR+rKnzGRkZGRkZGRkZGRkZGRkZGRkZGRkZGRkZGRkZGf1X+gfsuq396vV94wAAAABJRU5ErkJggg==" alt="Avatar" class="avatar" style="width: 100%; height=100% ">


                </td>
            </tr>


        </table>

        <div class="container">
            <label for="uname"><b>Name</b></label>
            <input type="text" placeholder="Enter Yourname" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
    </body>
</div>

</html>
