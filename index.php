<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&amp;display=swap" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">

    <title>池田瓦店</title>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/inview.js"></script>
</head>

<body>
    <header class="header">
        <div class="header-mainvisual">
            <h1 class="mainvisual-inner">
            </h1>
        </div>
    </header>

    <section class="about pd100 pt100" id="about">
        <!-- <h1 class="main-title inviewfadeInUp">About</h1> -->
        <div class="inner">
            <div class="about-content">
                <h2 class="about-title inviewfadeInUp ">
                    屋根修理のことなら、<br />
                    池田瓦店へ
                </h2>
                <div class="about-wrap inviewfadeInUp ">
                    <div class="about-text">
                        <p class="mb20">
                            屋根専門として35年。積み重ねてきた経験と実績。
                        </p>
                        <p class="mb20">
                            雨漏り・漆喰（しっくい）剥がれ・瓦のズレ等、
                            最適解な施工、スムーズかつ丁寧に対応、
                            お客様に安心と信頼を提供します。
                        </p>
                        <p class="mb20">
                            いつもは見えない屋根だから
                            定期点検が重要です！
                        </p>
                        <p class="mb20">
                            安心で美しい瓦屋根を葺きあげ
                            大切な家をお守りします。
                        </p>
                    </div>
                    <div class="about-img">
                        <img class="pic" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lp_img_01.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lead">
        <div class="lead-content">
            <div class="inviewfadeInUp">
                <h3 class="lead-title">
                    現地調査・見積もり無料
                    <span class="small">お気軽にご相談ください。</span>
                </h3>
                <div class="lead-wrap">
                    <h2 class="tel-phone">0120-123-45678</h2>
                    <div class="lead-link">
                        <ul class="link-items">
                            <li class="link-item mail-box">
                                <a href="#contact" class="btn-inner">メール相談はこちら</a>
                            </li>
                            <li class="link-item line-box">
                                <a href="#" class="btn-inner">LINE相談はこちら</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="alert pd100 pt100" id="alert">
        <!-- <h1 class="main-title inviewfadeInUp">alert</h1> -->
        <div class="alert-content inviewfadeInUp">
            <div class="inner">
                <h2 class="alert-title inviewfadeInUp">
                    こんな<span class="alert_red">サイン</span>が出ていたら要注意！
                </h2>
                <div class="alert-wrap">
                    <ul class="alert-items">

                        <li class="alert-item inviewfadeInUp">
                            <div class="alert_detailarea">
                                <dl class="alert_detailarea__text">
                                    <dt class="alert_detailarea__title">
                                        <div class="alert_detailarea__title_l">
                                            <span class="name">
                                                漏れ：瓦屋根が漏れ始めると、
                                                <small></small>
                                            </span>
                                        </div>
                                    </dt>
                                    <dd class="alert_detailarea__comment">
                                        <p>
                                            屋根裏や壁に水滴が見られることがあります。これは、瓦が古くなったり、接着剤が劣化したり、金物が錆びたりしたため、瓦が正しく固定されていなくなっていることが原因です。漏れが発生した場合には、早めに修理を行う必要があります。
                                        </p>
                                    </dd>
                                </dl>
                                <div class="alert_detailarea__image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lp_img_02.jpg" alt="" />
                                </div>
                            </div>
                        </li>

                        <div class="border-line"></div>

                        <li class="alert-item inviewfadeInUp">
                            <div class="alert_detailarea">
                                <dl class="alert_detailarea__text">
                                    <dt class="alert_detailarea__title">
                                        <div class="alert_detailarea__title_l">
                                            <span class="name">
                                                劣化した瓦：瓦が割れたり、
                                                <small></small>
                                            </span>
                                        </div>
                                    </dt>
                                    <dd class="alert_detailarea__comment">
                                        <p>
                                            色が褪せたりすることがあります。これは、瓦が古くなったり、環境要因によって劣化したためです。割れた瓦や褪せた瓦は、漏れの原因にもなりかねないため、修理を行う必要があります。
                                        </p>
                                    </dd>
                                </dl>
                                <div class="alert_detailarea__image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lp_img_03.jpg" alt="" />
                                </div>
                            </div>
                        </li>

                        <div class="border-line"></div>

                        <li class="alert-item inviewfadeInUp">
                            <div class="alert_detailarea">
                                <dl class="alert_detailarea__text">
                                    <dt class="alert_detailarea__title">
                                        <div class="alert_detailarea__title_l">
                                            <span class="name">
                                                虫やカビ：瓦に虫やカビが生えている場合があります。
                                                <small></small>
                                            </span>
                                        </div>
                                    </dt>
                                    <dd class="alert_detailarea__comment">
                                        <p>
                                            これは、湿気や湿度が高い場所にある場合に発生しやすく、屋根の材料を食べてしまうこともあります。また、瓦に生えた虫やカビは、瓦の構造を破壊し、漏れを引き起こす可能性もあります。これらは早めに除去しなければならない。
                                        </p>
                                    </dd>
                                </dl>
                                <div class="alert_detailarea__image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lp_img_04.jpg" alt="" />
                                </div>
                            </div>
                        </li>

                        <div class="border-line"></div>

                        <li class="alert-item inviewfadeInUp">
                            <div class="alert_detailarea">
                                <dl class="alert_detailarea__text">
                                    <dt class="alert_detailarea__title">
                                        <div class="alert_detailarea__title_l">
                                            <span class="name">
                                                屋根の雪や氷の溜まり：瓦屋根は、
                                                <small></small>
                                            </span>
                                        </div>
                                    </dt>
                                    <dd class="alert_detailarea__comment">
                                        <p>
                                            雪や氷が溜まりやすいため、水が蓄積し、漏れの原因にもなりかねない。特に、屋根の角には水が蓄積しやすく、注意が必要です。
                                        </p>
                                    </dd>
                                </dl>
                                <div class="alert_detailarea__image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lp_img_05.jpg" alt="" />
                                </div>
                            </div>
                        </li>

                        <div class="border-line"></div>

                        <li class="alert-item inviewfadeInUp">
                            <div class="alert_detailarea">
                                <dl class="alert_detailarea__text">
                                    <dt class="alert_detailarea__title">
                                        <div class="alert_detailarea__title_l">
                                            <span class="name">
                                                屋根の落下物：瓦屋根は、
                                                <small></small>
                                            </span>
                                        </div>
                                    </dt>
                                    <dd class="alert_detailarea__comment">
                                        <p>
                                            老朽化や劣化した瓦などが落下する可能性があります。これは危険なため早めに修理をする必要があります。
                                        </p>
                                    </dd>
                                </dl>
                                <div class="alert_detailarea__image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lp_img_06.jpg" alt="" />
                                </div>
                            </div>
                        </li>

                        <div class="border-line"></div>

                        <li class="alert-item inviewfadeInUp">
                            <div class="alert_detailarea">
                                <dl class="alert_detailarea__text">
                                    <dt class="alert_detailarea__title">
                                        <div class="alert_detailarea__title_l">
                                            <span class="name">
                                                異常な音：瓦屋根には、
                                                <small></small>
                                            </span>
                                        </div>
                                    </dt>
                                    <dd class="alert_detailarea__comment">
                                        <p>
                                            異常な音がすることがあります。雨や風が強い時に、異常な音がする場合は、瓦の接着剤や金物が劣化している可能性があります。
                                        </p>
                                    </dd>
                                </dl>
                                <div class="alert_detailarea__image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lp_img_11.jpg" alt="" />
                                </div>
                            </div>
                        </li>

                        <div class="border-line"></div>

                        <li class="alert-item inviewfadeInUp">
                            <div class="alert_detailarea">
                                <dl class="alert_detailarea__text">
                                    <dt class="alert_detailarea__title">
                                        <div class="alert_detailarea__title_l">
                                            <span class="name">
                                                年月の経過による老朽化：谷板は、
                                                <small></small>
                                            </span>
                                        </div>
                                    </dt>
                                    <dd class="alert_detailarea__comment">
                                        <p>
                                            屋根と屋根裏の間にあり、環境要因や湿気によって劣化します。年月の経過により、谷板が古くなり、穴が空いてしまう可能性があります。
                                        </p>
                                    </dd>
                                </dl>
                                <div class="alert_detailarea__image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lp_img_07.jpg" alt="" />
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="alert02 pd100 pt100" id="alert02">
        <h2 class="alert-title inviewfadeInUp">そのサイン、放置するとこんなことに…</h2>
        <div class="alert02_content inviewfadeInUp">
            <div class="inner">
                <div class="alert02_text inviewfadeInUp">
                    <p>
                        下記の状態になっていると、雨漏りや雪によって棟が倒壊する危険が有ります。<br />
                        一度屋根を眺めてみてください、<br />
                        状態がどんどん悪化してしまうと、他の箇所にも影響し、改修費用も膨大になってしまいます。
                    </p>
                </div>

                <div class="alert02_wrap">
                    <ul class="alert02_items">
                        <li class="alert02_item inviewfadeInUp">
                            <div class="alert02_head">
                                <h3 class="alert02_item__title">
                                    土が溶けて
                                    <span class="t_yellow">なくなってしまう可能性が、、</span>
                                </h3>
                            </div>
                            <div class="alert02_body">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lp_img_08.jpg" alt="" />
                            </div>
                        </li>

                        <li class="alert02_item inviewfadeInUp">
                            <div class="alert02_head">
                                <h3 class="alert02_item__title">
                                    下地が湿気で
                                    <span class="t_yellow">腐食している可能性も</span>
                                </h3>
                            </div>
                            <div class="alert02_body">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lp_img_09.jpg" alt="" />
                            </div>
                        </li>

                    </ul>
                    <h2 class="alert02_subtitle inviewfadeInUp">
                        <!-- <span>そうなる前に!</span> -->
                        屋根工事は、<br class="is-sp"><span>私たち</span>におまかせください！
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="reason pd100 pt100" id="reason">
        <h2 class="reason_title inviewfadeInUp">
            <div class="reason_title__box">
                <div class="flex_end position_re">
                    <div class="text-center"><span class="l_size position_ab reason_sub_title">屋根修理</span></div>
                    <div class="text-center"><span class="t_yellow l_size  writing">3つの</span></div>
                    <div class="text-center"><span class="m_size">メリット</span></div>
                </div>


            </div>
        </h2>
        <div class="reason_content inviewfadeInUp">
            <div class="inner">
                <div class="reason_wrap">
                    <ul class="reason_items ">
                        <li class="reason_item inviewfadeInUp">
                            <span>1</span>
                            <p class="reason_detailtext">
                                雨漏りを解消し、<br class="is-sp" /><span class="t_yellow l_size">家族や貴重品</span>を守ることができます。
                            </p>
                        </li>

                        <li class="reason_item inviewfadeInUp">
                            <span>2</span>
                            <p class="reason_detailtext">
                                エネルギー効率が向上し、<br class="is-sp" />
                                <span class="t_yellow l_size">節約</span>することができます。
                            </p>
                        </li>

                        <li class="reason_item inviewfadeInUp">
                            <span>3</span>
                            <p class="reason_detailtext">
                                屋根の耐久性が向上し、<br class="is-sp" /><span class="t_yellow l_size">長持ち</span>することができ、費用対効果も高いです。
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="service pd100 pt100" id="service">
        <h2 class="main-title inviewfadeInUp service_title">完全自社施工の魅力</h2>
        <div class="service_content inviewfadeInUp">
            <div class="inner">
                <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lp_img_12.png" alt="" /></figure>
            </div>
        </div>
    </section>

    <section class="price pd100 pt100" id="price">
        <h2 class="main-title inviewfadeInUp">料金</h2>
        <div class="price_content inviewfadeInUp">
            <div class="inner">
                <div class="price_subtitle inviewfadeInUp">
                    <p>
                        工事内容によって金額がかなり変わりますが、<br />目安としては以下の料金表の通りです。
                    </p>
                </div>
                <ul class="price_areabox__list">
                    <li class="price_areabox_list_item inviewfadeInUp">
                        <div class="price_detailarea">
                            <dl class="price_detailarea__text">
                                <dt class="price_detailarea__ttl">
                                    <div class="price_detailarea__ttl_l">
                                        <span class="name">瓦の差し替え工事</span>
                                    </div>
                                </dt>
                                <dd class="price_detailarea__price">
                                    <em>
                                        <span class="primary-color">¥5,000</span>
                                        〜
                                        <!-- <span class="primary-color"> ¥10,000</span> -->
                                        <span class="en">（税込）</span>
                                    </em>
                                </dd>
                            </dl>
                        </div>
                    </li>

                    <li class="price_areabox_list_item inviewfadeInUp">
                        <div class="price_detailarea">
                            <dl class="price_detailarea__text">
                                <dt class="price_detailarea__ttl">
                                    <div class="price_detailarea__ttl_l">
                                        <span class="name">棟積み直し工事</span>
                                    </div>
                                </dt>
                                <dd class="price_detailarea__price">
                                    <em>
                                        <span class="primary-color">¥25,000</span>
                                        〜
                                        <span class="en">（税込）</span>
                                    </em>
                                </dd>
                            </dl>
                        </div>
                    </li>

                    <li class="price_areabox_list_item inviewfadeInUp">
                        <div class="price_detailarea">
                            <dl class="price_detailarea__text">
                                <dt class="price_detailarea__ttl">
                                    <div class="price_detailarea__ttl_l">
                                        <span class="name">漆喰工事</span>
                                    </div>
                                </dt>
                                <dd class="price_detailarea__price">
                                    <em>
                                        <span class="primary-color">¥3,000</span>
                                        〜
                                        <span class="en">（税込）</span>
                                    </em>
                                </dd>
                            </dl>
                        </div>
                    </li>

                    <li class="price_areabox_list_item inviewfadeInUp">
                        <div class="price_detailarea">
                            <dl class="price_detailarea__text">
                                <dt class="price_detailarea__ttl">
                                    <div class="price_detailarea__ttl_l">
                                        <span class="name">雨とい交換・修理（1m）</span>
                                    </div>
                                </dt>
                                <dd class="price_detailarea__price">
                                    <em>
                                        <span class="primary-color">¥5,000</span>
                                        〜
                                        <span class="primary-color"> ¥10,000</span>
                                        <span class="en">（税込）</span>
                                    </em>
                                </dd>
                            </dl>
                        </div>
                    </li>
                </ul>
                <h2 class="price_title inviewfadeInUp">屋根葺き替え工事​ 施工事例
                    <br class="is-sp" />（参考価格）
                </h2>
                <div class="price_wrap">
                    <ul class="price_items">
                        <li class="price_item inviewfadeInUp">
                            <div class="price_detailarea02">
                                <div class="price_item__left">
                                    <h3 class="price_item__left_case">ケース1</h3>
                                    <div class="price_item__left_text">
                                        <p>
                                            <br />
                                            参考価格
                                            <br />
                                            <span class="primary-color">
                                                2,720,000円（税込）
                                            </span>
                                            <br />
                                            下地材交換 足場含む
                                        </p>
                                    </div>
                                </div>
                                <div class="price_item__right">
                                    <img class="price_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lp_img_13.jpg" alt="" />
                                </div>
                            </div>
                        </li>

                        <li class="price_item inviewfadeInUp">
                            <div class="price_detailarea02">
                                <div class="price_item__left">
                                    <h3 class="price_item__left_case">ケース2</h3>
                                    <div class="price_item__left_text">
                                        <p>
                                            <br />
                                            参考価格
                                            <br />
                                            <span class="primary-color">¥3,300,000</span>（税込）
                                            <br />
                                            下地材交換 焼き板交換
                                            <br />
                                            足場含む
                                            <br />
                                        </p>
                                    </div>
                                </div>
                                <div class="price_item__right">
                                    <img class="price_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lp_img_15.jpg" alt="" />
                                </div>
                            </div>
                        </li>

                        <li class="price_item inviewfadeInUp">
                            <div class="price_detailarea02">
                                <div class="price_item__left">
                                    <h3 class="price_item__left_case">ケース3</h3>
                                    <div class="price_item__left_text">
                                        <p>
                                            <br />
                                            参考価格
                                            <br />
                                            <span class="primary-color">¥1,300,000</span>（税込）
                                            <br />
                                            カバー工法 足場含む
                                            <br />
                                        </p>
                                    </div>
                                </div>
                                <div class="price_item__right">
                                    <img class="price_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lp_img_17.jpg" alt="" />
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- <div class="insurance">
            <div class="insurance-content">
              <div class="insurance-text">
                <h3>
                  雨とい工事に<br /><span
                    >火災保険 が適用されるかもしれません！</span
                  >
                </h3>
                <p>
                  「火災保険」に加入されている方であれば、<br />風や雪・雹（ひょう）による被害と認められた場合、保険金で雨とい修理ができることがあります。<br />例えば、台風や落雪によって雨といが傾いた、支持金具が外れてしまった、<br />突風や木枯らし、春一番などによる被害でも、火災保険を活用できることがあるので、<br />経年劣化と諦めず、補償対象になるかどうか、<br />まずは相談してみてください。
                </p>
                <img src="" alt="" />
              </div>
            </div>
          </div> -->
            </div>
        </div>
    </section>

    <section class="lead">
        <div class="lead-content inviewfadeInUp">
            <div class="">
                <h3 class="lead-title inviewfadeInUp">
                    現地調査・見積もり無料
                    <span class="small">お気軽にご相談ください。</span>
                </h3>
                <div class="lead-wrap inviewfadeInUp">
                    <h2 class="tel-phone">0120-123-45678</h2>
                    <div class="lead-link">
                        <ul class="link-items">
                            <li class="link-item">
                                <div class="mail-box">
                                    <a href="#contact" class="btn-inner">メール相談はこちら</a>
                                </div>
                            </li>
                            <li class="link-item">
                                <div class="line-box">
                                    <a href="#" class="btn-inner">LINE相談はこちら</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flow_area pd100">
        <h2 class="flow_title inviewfadeInUp">
            <span>お申込みの流れ</span>
            <br />
            <span class="bg_white flow_step">3ステップ</span>
        </h2>
        <div class="inner">
            <div class="flow_areabox inviewfadeInUp">
                <p class="flow_areabox_text">
                    <em>
                        現地調査・見積もり
                        <br class="is-sp" />
                        無料
                    </em>
                    見積もり後のキャンセルでも
                    <br class="is-sp" />
                    費用はかかりません
                </p>
                <ol class="flow_areabox_list">
                    <li class="flow_areabox_list_item inviewfadeInUp">
                        <section>
                            <dl class="flow_areabox_detail">
                                <dt class="flow_areabox_detail_ttl">
                                    <span>STEP1</span>
                                    <span>お問い合わせ</span>
                                </dt>
                                <dd class="flow_areabox_detail_text">
                                    <div class="flow_areabox_detail_image">
                                        <!-- <img src="/<?php echo get_stylesheet_directory_uri(); ?>/img/LINE_ALBUM_20230111_230111_2.jpg" alt="" /> -->
                                    </div>
                                    <p class="has-text-lefted">
                                        トラブルが発生したとき、何か気になるとき、すぐにご相談ください。電話でもフォームでも、24時間365日お受けしています。
                                    </p>
                                </dd>
                            </dl>
                        </section>
                    </li>

                    <li class="flow_areabox_list_item inviewfadeInUp">
                        <section>
                            <dl class="flow_areabox_detail">
                                <dt class="flow_areabox_detail_ttl">
                                    <span>STEP2</span>
                                    急行
                                </dt>
                                <dd class="flow_areabox_detail_text">
                                    <div class="flow_areabox_detail_image">
                                        <!-- <img src="/<?php echo get_stylesheet_directory_uri(); ?>/img/LINE_ALBUM_20230111_230111_2.jpg" alt="" /> -->
                                    </div>
                                    <p class="has-text-lefted">
                                        お客様のご予定に合わせて、現場まで最短即日でお伺いします。24時間365
                                        日お受けします。
                                    </p>
                                </dd>
                            </dl>
                        </section>
                    </li>

                    <li class="flow_areabox_list_item inviewfadeInUp">
                        <section>
                            <dl class="flow_areabox_detail">
                                <dt class="flow_areabox_detail_ttl">
                                    <span>STEP3</span>
                                    見積もり
                                </dt>
                                <dd class="flow_areabox_detail_text">
                                    <div class="flow_areabox_detail_image">
                                        <!-- <img src="/<?php echo get_stylesheet_directory_uri(); ?>/img/LINE_ALBUM_20230111_230111_2.jpg" alt="" /> -->
                                    </div>
                                    <p class="has-text-lefted">
                                        現場を確認し、最適な作業を提案します。駆除方法と所要時間、費用についてしっかりとご説明しますのでご安心ください。
                                    </p>
                                </dd>
                            </dl>
                        </section>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section class="customer pd100 pt100" id="customer">
        <h2 class="customer_title inviewfadeInUp">お客様の声</h2>
        <div class="customer_content inviewfadeInUp">
            <div class="inner">
                <ul class="customer_items">
                    <li class="customer_item inviewfadeInUp">
                        <div class="customer_text">
                            <p>
                                火災保険のことは知っていましたが、<br />
                                <span class="bold-color">手続きの方法まで<br />アドバイスしてもらえて<br />助かりました！</span>
                            </p>
                        </div>
                        <div class="customer_image">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1.svg" alt="" />
                        </div>
                    </li>

                    <li class="customer_item inviewfadeInUp">
                        <div class="customer_text">
                            <p>
                                火災保険のことは知っていましたが、<br />
                                <span class="bold-color">手続きの方法まで<br />アドバイスしてもらえて<br />助かりました！</span>
                            </p>
                        </div>
                        <div class="customer_image">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1.svg" alt="" />
                        </div>
                    </li>

                    <li class="customer_item inviewfadeInUp">
                        <div class="customer_text">
                            <p>
                                火災保険のことは知っていましたが、<br />
                                <span class="bold-color">手続きの方法まで<br />アドバイスしてもらえて<br />助かりました！</span>
                            </p>
                        </div>
                        <div class="customer_image">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1.svg" alt="" />
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="qestion pd100 pt100" id="question">
        <h2 class="main-title inviewfadeInUp mb50">Q&A</h2>
        <div class="inner">
            <div class="accordion">
                <div class="accordion_container">

                    <div class="accordion_item faq-itemQuestion">
                        <h3 class="question-title accordion_title js-accordion_title inviewfadeInUp ">
                            Q.他社の見積もりが高額でした。安くできますか？
                        </h3>
                        <div class="accordion_content" style="display:block;">
                            <div class="accordion_inwrap">
                                <p class="inviewfadeInUp ">
                                    A.ご提供致します。他社よりも安くご案内させていただきますので、見積もり内容を電話でお知らせ下さい。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion_item faq-itemQuestion">
                        <h3 class="question-title accordion_title js-accordion_title inviewfadeInUp ">
                            Q.キャンセルは出来ますか？
                        </h3>
                        <div class="accordion_content">
                            <div class="accordion_inwrap">
                                <p class="inviewfadeInUp ">
                                    A.可能です。見積もり内容をご確認いただいたうえで取り掛かりますので、ご安心ください。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion_item faq-itemQuestion">
                        <h3 class="question-title accordion_title js-accordion_title inviewfadeInUp ">
                            Q.どのエリアに対応していますか？
                        </h3>
                        <div class="accordion_content">
                            <div class="accordion_inwrap">
                                <p class="inviewfadeInUp ">
                                    A.大阪、兵庫、奈良、京都に対応しております。詳しくはお電話の際にご説明いたします。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion_item faq-itemQuestion">
                        <h3 class="question-title accordion_title js-accordion_title inviewfadeInUp ">
                            Q.作業後に見積もりよりも高い金額を請求されることはありますか？
                        </h3>
                        <div class="accordion_content">
                            <div class="accordion_inwrap">
                                <p class="inviewfadeInUp ">
                                    A.いいえ、御座いません。作業前に作業方法と料金について詳しく説明いたしますので、ご安心ください。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion_item faq-itemQuestion">
                        <h3 class="question-title accordion_title js-accordion_title inviewfadeInUp ">
                            Q.作業してもらうにあたって、こちらで準備することはありますか？
                        </h3>
                        <div class="accordion_content">
                            <div class="accordion_inwrap">
                                <p class="inviewfadeInUp ">
                                    A.ございません。準備・後片付けも全て当社スタッフが行います。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion_item faq-itemQuestion">
                        <h3 class="question-title accordion_title js-accordion_title inviewfadeInUp ">
                            Q.出張料はいくらですか？
                        </h3>
                        <div class="accordion_content">
                            <div class="accordion_inwrap">
                                <p class="inviewfadeInUp ">
                                    A.弊社では、出張料、見積もり料ともに全て0円となっております。作業料金のみでご案内いたします。
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="contact pt100 pd100" id="contact">
        <div class="contact-inner">
            <div class="contact-header">
                <div class="contact-headerInner">
                    <h2 class="util-ttl inviewfadeInUp">Contact</h2>
                    <p class="contact-headerTxt center-line">お問い合わせ</p>
                </div>
            </div>
            <div class="contact-content inviewfadeInUp">
                <form class="formrun" action="https://form.run/api/v1/r/99me5c7osaxca151mpmy2b2o" method="post" id="js-contactForm">
                    <dl class="contact-list">
                        <div class="contact-item">
                            <dt class="contact-itemTtl">お問合せ種別</dt>
                            <dd class="contact-selectBox">
                                <select name="form-select" id="form-select">
                                    <option value="-" selected>選択してください</option>
                                    <option value="ご相談">ご相談</option>
                                    <option value="見積もり依頼">見積もり依頼</option>
                                </select>
                            </dd>
                        </div>
                        <div class="contact-item">
                            <dt class="contact-itemTtl">氏名<span class="contact-requireLabel">必須</span></dt>
                            <dd class="contact-inputBox">
                                <input type="text" class="js-require" name="name" placeholder="氏名">
                                <span class="contact-focusLine"></span>
                            </dd>
                        </div>
                        <div class="contact-item">
                            <dt class="contact-itemTtl">フリガナ<span class="contact-requireLabel">必須</span></dt>
                            <dd class="contact-inputBox">
                                <input type="text" class="js-require" name="kana" placeholder="フリガナ">
                                <span class="contact-focusLine"></span>
                            </dd>
                        </div>
                        <div class="contact-item">
                            <dt class="contact-itemTtl">
                                お電話<span class="contact-requireLabel">必須</span>
                            </dt>
                            <dd class="contact-inputBox">
                                <input type="phone" class="js-require" name="phone" placeholder="08012345678">
                                <span class="contact-focusLine"></span>
                            </dd>
                        </div>

                        <div class="contact-item">
                            <dt class="contact-itemTtl">メールアドレス</dt>
                            <dd class="contact-inputBox">
                                <input type="email" class="js-require" name="email" placeholder="sample@gmail.com">
                                <span class="contact-focusLine"></span>
                            </dd>
                        </div>

                        <div class="contact-item contact-item--message mod-message">
                            <dt class="contact-itemTtl">メッセージ</dt>
                            <dd>
                                <textarea name="message"></textarea>
                            </dd>
                        </div>
                    </dl>
                    <div class="contact-privacy">
                        <input type="checkbox" name="privacy" id="form-privacy">
                        <label for="form-privacy" class="contact-privacyLabel">
                            個人情報保護方針に同意する
                        </label>
                    </div>
                    <button id="form-submit" class="contact-button" disabled>送信</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <section class="footer-lp wrap pt100">
            <div class="lp-wrapper inner">
                <div class="box_footer">
                    <p class="sub_lead">信頼と実績のRoofDoctor</p>
                    <h2 class="company_title">池田瓦店</h2>
                    <p>
                        兵庫県西脇市黒田庄町石原285-2<br>
                    </p>
                </div>
                <div class="sns_icon">
                    <ul class="sns_list">
                        <li class="sns_list_item">
                            <a href="https://www.instagram.com/roof_doctor555/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ph_sns_Instagram.png" alt=""></a>
                        </li>
                        <li class="sns_list_item">
                            <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ph_sns_twitter.png" alt=""></a>
                        </li>
                        <li class="sns_list_item">
                            <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ph_sns_youtube.png" alt=""></a>
                        </li>
                        <li class="sns_list_item">
                            <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ph_sns_ticktock.png" alt=""></a>
                        </li>
                    </ul>
                </div>
                <div class="unit-btn-01">
                    <a href="https://www.roof555doctor.com/" class="btn_inner" target="_blank">
                        <span>公式サイトはこちら</span>
                    </a>
                </div>
            </div>
        </section>
        <p>Copyright ©2023</p>
    </footer>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
    <?php wp_footer(); ?>
</body>

</html>
