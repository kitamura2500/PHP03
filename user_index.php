<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>G's Profile</title>
    <!-- Stylesheetの読み込み -->
    <link rel="stylesheet" href="css_php/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="css_php/english.css">

    <!-- jQueryの読み込み -->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

    <!-- ↓このページ参照 -->
    <!-- https://shinsotsu.mynavi-agent.jp/knowhow/article/industry-list.html -->
</head>

<body class="body-wrapper">
    <div class="title-wrapper">
        <h1 class="siteTitle">G's English</h1>
        <h2 class="siteSubTitle">- How to use PHP -</h2>
    </div>

    <article class="profile-wrapper">
        <section class="profile-head">
            <div>
                <h2 class="siteSubTitle">管理者登録</h2>
            </div>
            <div class="profile-box">
                <a href="user_list_view.php">管理者一覧</a>
            </div>
        </section>

        <section class="profile-box">
            <div class="profile-title">
                <h2>下記入力してください</h2>
            </div>

            <form action="user_update.php" name="formProfile" method="POST">
                <div class="form-field">
                    <label for="userName">名前</label>
                    <input id="lastName" class="name-input" name="lastName" type="text" value="" placeholder="姓">
                    <input id="firstName" class="name-input firstname-input" name="firstName" type="text" value="" placeholder="名">
                </div>
                <div class="form-field">
                    <label for="userId">ユーザーネーム</label>
                    <input id="userId" class="long-input" name="userId" type="text" value="">
                </div>
                <div class="form-field">
                    <label for="pwd">パスワード</label>
                    <input id="pwd" class="long-input" name="pwd" type="text" value="">
                </div>
                <div class="form-field">
                    <label for="toeic">TOEICスコア</label>
                    <select id="toeic-score" name="toeicScore" class="option-input">
                        <option value=""></option>
                        <option value="未受験">未受験</option>
                        <option value="350-500点">350-500点</option>
                        <option value="505-630点">505-630点</option>
                        <option value="635-760点">635-760点</option>
                        <option value="765-860点">765-860点</option>
                        <option value="865-930点">865-930点</option>
                        <option value="935-990点">935-990点</option>
                    </select>
                </div>

                <div class="form-field">
                    <label for="eiken">英語検定</label>
                    <select id="eiken-score" name="eikenScore" class="option-input">
                        <option value=""></option>
                        <option value="未受験">未受験</option>
                        <option value="5級">5級</option>
                        <option value="4級">4級</option>
                        <option value="3級">3級</option>
                        <option value="準2級">準2級</option>
                        <option value="2級">2級</option>
                        <option value="準1級">準1級</option>
                        <option value="1級">1級</option>
                    </select>
                </div>

                <div class="form-field">
                    <label for="industry">業界</label>
                    <span class="radio-input">
                        <input id="maker-radio" type="radio" name="industry" value="メーカー" checked="checked">メーカー</span>
                    <span class="radio-input">
                        <input id="service-radio" type="radio" name="industry" value="サービス・インフラ">サービス・インフラ</span>
                    <span class="radio-input">
                        <input id="trade-radio" type="radio" name="industry" value="商社">商社</span>
                    <span class="radio-input">
                        <input id="soft-radio" type="radio" name="industry" value="ソフトウェア">ソフトウェア</span>
                    <span class="radio-input">
                        <input id="retail-radio" type="radio" name="industry" value="小売">小売</span>
                    <br>
                </div>

                <div class="form-field">
                    <label for="industry"></label>
                    <span class="radio-input">
                        <input id="ad-radio" type="radio" name="industry" value="広告・出版・マスコミ">広告・出版・マスコミ</span>
                    <span class="radio-input">
                        <input id="finance-radio" type="radio" name="industry" value="金融">金融</span>
                    <span class="radio-input">
                        <input id="gov-radio" type="radio" name="industry" value="官公庁・公社・団体">官公庁・公社・団体</span>
                </div>

                <!-- デフォルトで見えている -->
                <div id="maker-show" class="form-field">
                    <label for="maker detail">メーカ詳細</label>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="食品" checked="checked">食品</span>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="農林">農林</span>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="水産">水産</span>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="建設">建設</span>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="住宅">住宅</span>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="インテリア">インテリア</span>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="繊維">繊維</span>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="化学">化学</span>
                </div>

                <!-- デフォルトで隠れている -->
                <div id="service-show" class="form-field form-hide">
                    <label for="service detail">サービス・インフラ詳細</label>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="不動産">不動産</span>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="鉄道">鉄道</span>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="航空">航空</span>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="運輸">運輸</span>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="物流">物流</span>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="電力">電力</span>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="ガス">ガス</span>
                    <span class="radio-input">
                        <input type="radio" name="detail" value="エネルギー">エネルギー</span>
                </div>

                <!-- デフォルトで隠れている -->
                <div id="trade-show" class="form-field form-hide">
                    <label for="trade detail">メーカ詳細</label>
                    <span class="radio-input">
                        <input type="radio" name="trade-detail" value="総合商社">総合商社</span>
                    <span class="radio-input">
                        <input type="radio" name="trade-detail" value="専門商社">専門商社</span>
                </div>

                <!-- デフォルトで隠れている -->
                <div id="soft-show" class="form-field form-hide">
                    <label for="software detail">ソフトウェア詳細</label>
                    <span class="radio-input">
                        <input type="radio" name="soft-detail" value="ソフトウエア">ソフトウエア</span>
                    <span class="radio-input">
                        <input type="radio" name="soft-detail" value="インターネット">インターネット</span>
                    <span class="radio-input">
                        <input type="radio" name="soft-detail" value="通信">通信</span>
                </div>

                <!-- デフォルトで隠れている -->
                <div id="retail-show" class="form-field form-hide">
                    <label for="retail detail">小売詳細</label>
                    <span class="radio-input">
                        <input type="radio" name="retail-detail" value="百貨店・スーパー">百貨店・スーパー</span>
                    <span class="radio-input">
                        <input type="radio" name="retail-detail" value="コンビニ">コンビニ</span>
                    <span class="radio-input">
                        <input type="radio" name="retail-detail" value="専門店">専門店</span>
                </div>

                <!-- デフォルトで隠れている -->
                <div id="ad-show" class="form-field form-hide">
                    <label for="ad detail">広告・出版・マスコミ詳細</label>
                    <span class="radio-input">
                        <input type="radio" name="ad-detail" value="放送">放送</span>
                    <span class="radio-input">
                        <input type="radio" name="ad-detail" value="新聞">新聞</span>
                    <span class="radio-input">
                        <input type="radio" name="ad-detail" value="出版">出版</span>
                    <span class="radio-input">
                        <input type="radio" name="ad-detail" value="広告">広告</span>
                </div>

                <!-- デフォルトで隠れている -->
                <div id="finance-show" class="form-field form-hide">
                    <label for="finance detail">金融詳細</label>
                    <span class="radio-input">
                        <input type="radio" name="finance-detail" value="銀行・証券">銀行・証券</span>
                    <span class="radio-input">
                        <input type="radio" name="finance-detail" value="クレジット">クレジット</span>
                    <span class="radio-input">
                        <input type="radio" name="finance-detail" value="信販・リース">信販・リース</span>
                    <span class="radio-input">
                        <input type="radio" name="finance-detail" value="その他金融">その他金融</span>
                    <span class="radio-input">
                        <input type="radio" name="finance-detail" value="生保・損保">生保・損保</span>
                </div>

                <!-- デフォルトで隠れている -->
                <div id="gov-show" class="form-field form-hide">
                    <label for="gov detail">金融詳細</label>
                    <span class="radio-input">
                        <input type="radio" name="gov-detail" value="公社・団体">公社・団体</span>
                    <span class="radio-input">
                        <input type="radio" name="gov-detail" value="官公庁">官公庁</span>
                </div>

                <div class="save-btn-field">
                    <input id="form-check-btn" class="save-btn" type="submit" value="保存する">
                </div>
            </form>

        </section>


    </article>


    <footer>
        <p class="copyright">
            <small>copyrights 2018 Yasuhiro Kitamura All RIghts Reserved.</small>
        </p>
    </footer>

    <script>
        $("#maker-radio").on("click", function () {
            $(".form-hide").hide();
            $("#maker-show").show("slow");
        });
        $("#service-radio").on("click", function () {
            $("#maker-show").hide();
            $(".form-hide").hide();
            $("#service-show").show("slow");
        });
        $("#soft-radio").on("click", function () {
            $("#maker-show").hide();
            $(".form-hide").hide();
            $("#soft-show").show("slow");
        });
        $("#trade-radio").on("click", function () {
            $("#maker-show").hide();
            $(".form-hide").hide();
            $("#trade-show").show("slow");
        });
        $("#retail-radio").on("click", function () {
            $("#maker-show").hide();
            $(".form-hide").hide();
            $("#retail-show").show("slow");
        });
        $("#ad-radio").on("click", function () {
            $("#maker-show").hide();
            $(".form-hide").hide();
            $("#ad-show").show("slow");
        });
        $("#finance-radio").on("click", function () {
            $("#maker-show").hide();
            $(".form-hide").hide();
            $("#finance-show").show("slow");
        });
        $("#gov-radio").on("click", function () {
            $("#maker-show").hide();
            $(".form-hide").hide();
            $("#gov-show").show("slow");
        });

 

        let flag = [0, 0, 0, 0, 0, 0, 0, 0, 0];
        $("form").submit(function () {
            let err = 0;
            if ($("input[name='userId']").val() == "") {
                if (flag[0] == 0) {
                    $("#userId").css("backgroundColor", "deepskyblue").after("<div id='name1'>※入力必須</div>");
                    flag[0] = 1;
                }
                err = 1;
            } else {
                $("#userId").css("backgroundColor", "white");
                $("#name1").empty();
            }

            if ($("input[name='pwd']").val() == "") {
                if (flag[8] == 0) {
                    $("#pwd").css("backgroundColor", "deepskyblue").after("<div id='name8'>※入力必須</div>");
                    flag[8] = 1;
                }
                err = 1;
            } else {
                $("#pwd").css("backgroundColor", "white");
                $("#name8").empty();
            }

            if ($("input[name='lastName']").val() == "") {
                if (flag[1] == 0) {
                    $("#lastName").css("backgroundColor", "deepskyblue");
                    flag[1] = 1;
                }
                err = 1;
            } else {
                $("#lastName").css("backgroundColor", "white");
            }

            if ($("input[name='firstName']").val() == "") {
                if (flag[2] == 0) {
                    $("#firstName").css("backgroundColor", "deepskyblue").after("<div id='name2'>※入力必須です※</div>");
                    flag[2] = 1;
                }
                err = 1;
            } else if (!$("input[name='lastName']").val() == "" && !$("input[name='firstName']").val() == "") {
                $("#firstName").css("backgroundColor", "white");
                $("#name2").empty();
            }

            if ($("input[name='companyName']").val() == "") {
                if (flag[3] == 0) {
                    $("#company").css("backgroundColor", "deepskyblue").after("<div id='name3'>※入力必須です※</div>");
                    flag[3] = 1;
                }
                err = 1;
            } else {
                $("#company").css("backgroundColor", "white");
                $("#name3").empty();
            }

            if ($("input[name='positionName']").val() == "") {
                if (flag[4] == 0) {
                    $("#position").css("backgroundColor", "deepskyblue").after("<div id='name4'>※入力必須です※</div>");
                    flag[4] = 1;
                }
                err = 1;
            } else {
                $("#position").css("backgroundColor", "white");
                $("#name4").empty();
            }

            if ($("textarea[name='careerName']").val() == "") {
                if (flag[5] == 0) {
                    $("#career").css("backgroundColor", "deepskyblue").after("<div id='name5'>※入力必須です※</div>");
                    flag[5] = 1;
                }
                err = 1;
            } else {
                $("#career").css("backgroundColor", "white");
                $("#name5").empty();
            }

            if ($("select[name='toeicScore']").val() == "") {
                if (flag[6] == 0) {
                    $("#toeic-score").css("backgroundColor", "deepskyblue").after("<div id='name6'>※入力必須です※</div>");
                    flag[6] = 1;
                }
                err = 1;
            } else {
                $("#toeic-score").css("backgroundColor", "white");
                $("#name6").empty();
            }

            if ($("select[name='eikenScore']").val() == "") {
                if (flag[7] == 0) {
                    $("#eiken-score").css("backgroundColor", "deepskyblue").after("<div id='name7'>※入力必須です※</div>");
                    flag[7] = 1;
                }
                err = 1;
            } else {
                $("#eiken-score").css("backgroundColor", "white");
                $("#name7").empty();
            }

            if (err >= 1) {
                return false;
            } else {
                return true;
            }
        });


    </script>






</body>

</html>