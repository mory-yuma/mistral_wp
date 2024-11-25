<footer id="footer">
        <div class="footer-center">
            <div class="footer-container">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                <ul>
                    <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('service') )); ?>">サービス</a></li>
                    <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('overview') )); ?>">会社概要</a></li>
                    <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('partner') )); ?>">パートナー募集</a></li>
                    <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('contact') )); ?>">お問い合わせ</a></li>
                    <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('policy') )); ?>">プライバシーポリシー</a></li>
                </ul>
            </div>
            <p class="copyright">
                Copyright &copy; 2020 mistral. All Rights Reserved.
            </p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
      $('.burger').click(function() {
        $(".burger").toggleClass("is-active");
        $(".sp_menu").toggleClass("is-active");
      })
    </script>
    <?php wp_footer();?>
</body>
</html>