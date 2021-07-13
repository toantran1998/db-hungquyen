        </div><!-- **Container - End** -->

        </div><!-- **Main - End** --><?php

        do_action( 'tilemax_hook_content_after' );

        $footer = (int) get_theme_mod( 'show-footer', tilemax_defaults('show-footer') );
		$activefooter = tilemax_is_active_sidebar_footer();
        $show_copyright_section = (int) get_theme_mod( 'show-copyright-text', tilemax_defaults('show-copyright-text') ); ?>
        <!-- **Footer** -->
        <footer id="footer">
            <div id="top-footer">
                <table>
                    <colgroup>
                        <col span="1" style="width: 60%"/>
                        <col span="1" style="width: 40%"/>
                    </colgroup>
                    <tbody>
                    <tr class="kt-title">
                        <td>
                            <span class="kt-text-white">HÙNG QUYÊN Nơi Hội Tụ Các Thương Hiệu Đẳng Cấp</span>
                            <span class="highlighter"></span>
                        </td>
                        <td>
                            <span class="contact kt-text-white">CÔNG TY TNHH DỊCH VỤ THƯƠNG MẠI VÀ SẢN XUẤT HÙNG QUYÊN</span>
                            <span class="highlighter"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="showrooms">
                            <div class="kt-row">
                                <div class="kt-col-4">
                                    <h4 class="kt-text-white">SHOWROOM 1</h4>
                                    <p>Địa chỉ: 156 Sài Thị, Thị Trấn Khoái Châu, Tỉnh Hưng Yên</p>
                                </div>
                                <div class="kt-col-4">
                                    <h4 class="kt-text-white">SHOWROOM 2</h4>
                                    <p>Địa chỉ: Lô số 230, Khu đô thị mới Thị Trấn Văn Giang, huyện Văn Giang, tỉnh Hưng Yên (CÁCH VÒNG XUYẾN VĂN GIANG 100M ĐỐI DIỆN NGÂN HÀNG BIDV)</p>
                                </div>
                                <div class="kt-col-4">
                                    <h4 class="kt-text-white">SHOWROOM 3</h4>
                                    <p>Địa chỉ: HA02-58 - KĐT Vinhomes Ocean Park - Kiêu Kỵ - Gia Lâm - Hà Nội</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="kt-contact-icon"><img class="kt-text-white" src="http://hungquyenceramics.com/wp-content/uploads/2021/07/placeholder.png"/> <span>Trụ sở: Lô số 230, Khu đô thị mới Thị Trấn Văn Giang, huyện Văn Giang, tỉnh Hưng Yên (CÁCH VÒNG XUYẾN VĂN GIANG 100M ĐỐI DIỆN NGÂN HÀNG BIDV)</span></p>
                            <p class="kt-contact-icon"><img class="kt-text-white" src="http://hungquyenceramics.com/wp-content/uploads/2021/07/phone-call.png"/><span>0983.084.351 - 0912.819.886</span></p>
                            <p class="kt-contact-icon"><img class="kt-text-white" src="http://hungquyenceramics.com/wp-content/uploads/2021/07/email.png"/><span>nthungquyen@gmail.com</span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <hr/>
            <div id="bottom-footer">
                <table>
                    <colgroup>
                        <col span="1" style="width: 20%"/>
                        <col span="1" style="width: 20%"/>
                        <col span="1" style="width: 20%"/>
                        <col span="1" style="width: 40%"/>
                    </colgroup>
                    <tr>
                        <td>
                            <h4 class="kt-text-white">Menu</h4>
                            <ul class="no-list">
                                <li><a href="https://hungquyenceramics.com/">Trang chủ</a></li>
                                <li><a href="https://hungquyenceramics.com/about-us-ii/">Về chúng tôi</a></li>
                                <li><a href="https://hungquyenceramics.com/shop/">Sản phẩm</a></li>
                                <li><a href="https://hungquyenceramics.com/blog/">Blog Hùng Quyên</a></li>
                                <li><a href="https://hungquyenceramics.com/showroom-lien-he/">Showroom & Liên hệ</a></li>
                            </ul>
                        </td>
                        <td>
                            <h4 class="kt-text-white">Chính sách</h4>
                            <ul class="no-list">
                                <li>Chính sách bảo mật</li>
                                <li>Hình thức thanh toán</li>
                                <li>Chính sách vận chuyển</li>
                                <li>Chính sách bảo hành</li>
                                <li>Chính sách đổi trả hàng</li>
                            </ul>
                        </td>
                        <td>
                            <h4 class="kt-text-white">Liên kết với chúng tôi</h4>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/Hung-Quyen-Ceramics-102189955316411"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                                <img src="https://img.icons8.com/fluent/48/000000/youtube-play.png"/>
                                <img src="https://img.icons8.com/fluent/50/000000/instagram-new.png"/>
                            </div>
                        </td>
                        <td>
                            <div class="certs">
                                <img class="cert-bocongthuong" src="http://hungquyenceramics.com/wp-content/uploads/2021/07/bo-cong-thuong.png" width="100px"/>
                                <img class="cert-dmca" src="http://hungquyenceramics.com/wp-content/uploads/2021/07/dcma-cert.png" width="100px"/>
                            </div>
                            <span>GPKD số 10230204 cấp ngày 27/11/2019</span>
                            <span>Bởi sở kế hoạc và đầu tư TP.HCM</span>
                            <span>Copyright @ 2020 HungNguyen</span>
                        </td>
                    </tr>
                </table>
            </div>
        </footer>
        <!-- **Footer - End** -->
    </div><!-- **Inner Wrapper - End** -->
</div><!-- **Wrapper - End** -->
<?php// do_action( 'tilemax_hook_bottom' ); ?>
<?php wp_footer(); ?>
</body>
</html>