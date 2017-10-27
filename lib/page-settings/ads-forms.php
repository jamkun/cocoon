<!-- 広告設定 -->
<div id="ads" class="postbox">
  <h2 class="hndle"><?php _e( '広告設定', THEME_NAME ) ?></h2>
  <div class="inside">

    <p><?php _e( '広告全般に関する設定です。アドセンス設定や、ウィジェットの設定も含みます。', THEME_NAME ) ?></p>

    <table class="form-table">
      <tbody>

        <!-- 広告の表示 -->
        <tr>
          <th scope="row">
            <?php genelate_label_tag(OP_ALL_ADS_VISIBLE, __( '広告の表示', THEME_NAME )); ?>
          </th>
          <td>
            <?php
            genelate_checkbox_tag(OP_ALL_ADS_VISIBLE, is_all_ads_visible(), __("全ての広告を表示",THEME_NAME ));
            genelate_tips_tag(__( 'アドセンス設定、ウィジェット設定等、全ての広告の表示を切り替えます。', THEME_NAME ));
            ?>
          </td>
        </tr>

        <!-- 広告ラベル -->
        <tr>
          <th scope="row">
            <?php genelate_label_tag(OP_AD_LABEL, __( '広告ラベル', THEME_NAME )); ?>
          </th>
          <td>
            <?php
            genelate_textbox_tag(OP_AD_LABEL, get_ad_label(), __( '「スポンサーリンク」か「広告」推奨', THEME_NAME ));
            genelate_tips_tag(__( '広告上部ラベルに表示されるテキストの入力です。', THEME_NAME ));
            ?>
          </td>
        </tr>

      </tbody>
    </table>

  </div>
</div>

<!-- アドセンス設定 -->
<div id="ads" class="postbox">
  <h2 class="hndle"><?php _e( 'アドセンス設定', THEME_NAME ) ?></h2>
  <div class="inside">

    <p><?php _e( 'アドセンス広告に関する設定です。一応通常広告でも利用できるようにはなっています。', THEME_NAME ) ?></p>

    <table class="form-table">
      <tbody>

      <!-- アドセンス広告表示 -->
      <tr>
          <th scope="row">
            <?php genelate_label_tag(OP_ALL_ADSENSES_VISIBLE, __( 'アドセンス広告の表示', THEME_NAME )); ?>
          </th>
          <td>
            <?php
            genelate_checkbox_tag( OP_ALL_ADSENSES_VISIBLE, is_all_adsenses_visible(), __( '全てのアドセンス広告を表示', THEME_NAME ));
            genelate_tips_tag(__( '「アドセンス設定」で設定した、アドセンス広告全ての表示を切り替えます。', THEME_NAME ));
            ?>
          </td>
        </tr>

        <!-- 広告コード -->
        <tr>
          <th scope="row">
            <label for="<?php echo OP_AD_CODE; ?>"><?php _e( '広告コード', THEME_NAME ) ?></label>
          </th>
          <td>
            <?php
            genelate_textarea_tag(OP_AD_CODE, get_ad_code(), __( 'アドセンスのレスポンシブコードを入力してください', THEME_NAME )) ;
            genelate_tips_tag(__( 'アドセンスのレスポンシブ広告コードを入力してください。', THEME_NAME ));
            ?>
          </td>
        </tr>

        <!-- 広告の表示位置 -->
        <tr>
          <th scope="row">
            <?php genelate_label_tag(OP_AD_POS_INDEX_TOP_VISIBLE, __( '広告の表示位置', THEME_NAME )); ?>
          </th>
          <td>

            <div class="col-2">

              <div>

                <!-- インデックスページ -->
                <p><strong><?php _e( 'インデックスページの表示位置', THEME_NAME ) ?></strong></p>
                <ul>
                  <li>
                    <input type="checkbox" name="<?php echo OP_AD_POS_INDEX_TOP_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_ad_pos_index_top_visible()); ?>><?php _e('トップ' ,THEME_NAME ); ?>
                    <?php
                    //詳細設定
                    genelate_main_column_ad_detail_setting_forms(OP_AD_POS_INDEX_TOP_FORMAT, get_ad_pos_index_top_format(), OP_AD_POS_INDEX_TOP_LABEL_VISIBLE, is_ad_pos_index_top_label_visible());
                    ?>
                  </li>
                  <li>
                    <input type="checkbox" name="<?php echo OP_AD_POS_INDEX_MIDDLE_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_ad_pos_index_middle_visible()); ?>><?php _e('ミドル' ,THEME_NAME ); ?>
                    <?php //詳細設定
                    genelate_main_column_ad_detail_setting_forms(OP_AD_POS_INDEX_MIDDLE_FORMAT, get_ad_pos_index_middle_format(), OP_AD_POS_INDEX_MIDDLE_LABEL_VISIBLE, is_ad_pos_index_middle_label_visible()); ?>              </li>
                  <li>
                    <input type="checkbox" name="<?php echo OP_AD_POS_INDEX_BOTTOM_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_ad_pos_index_bottom_visible()); ?>><?php _e('ボトム' ,THEME_NAME ); ?>
                    <?php //詳細設定
                    genelate_main_column_ad_detail_setting_forms(OP_AD_POS_INDEX_BOTTOM_FORMAT, get_ad_pos_index_bottom_format(), OP_AD_POS_INDEX_BOTTOM_LABEL_VISIBLE, is_ad_pos_index_bottom_label_visible()); ?>

                  </li>
                </ul>

                <!-- サイドバー -->
                <p><strong><?php _e( 'サイドバーの表示位置', THEME_NAME ) ?></strong></p>
                <ul>
                  <li>
                    <input type="checkbox" name="<?php echo OP_AD_POS_SIDEBAR_TOP_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_ad_pos_sidebar_top_visible()); ?>><?php _e('サイドバートップ' ,THEME_NAME ); ?>
                    <?php //詳細設定
                    genelate_sidebar_ad_detail_setting_forms(OP_AD_POS_SIDEBAR_TOP_FORMAT, get_ad_pos_sidebar_top_format(), OP_AD_POS_SIDEBAR_TOP_LABEL_VISIBLE, is_ad_pos_sidebar_top_label_visible()); ?>
                  </li>
                  <li>
                    <input type="checkbox" name="<?php echo OP_AD_POS_SIDEBAR_BOTTOM_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_ad_pos_sidebar_bottom_visible()); ?>><?php _e('サイドバーボトム' ,THEME_NAME ); ?>
                    <?php //詳細設定
                    genelate_sidebar_ad_detail_setting_forms(OP_AD_POS_SIDEBAR_BOTTOM_FORMAT, get_ad_pos_sidebar_bottom_format(), OP_AD_POS_SIDEBAR_BOTTOM_LABEL_VISIBLE, is_ad_pos_sidebar_bottom_label_visible()); ?>
                  </li>
                </ul>

              </div>

              <!-- 投稿・固定ページ -->
              <div>
                <p><strong><?php _e( '投稿・固定ページの表示位置', THEME_NAME ) ?></strong></p>
                <ul>
                  <li>
                    <input type="checkbox" name="<?php echo OP_AD_POS_ABOVE_TITLE_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_ad_pos_above_title_visible()); ?>><?php _e('タイトル上' ,THEME_NAME ); ?>
                    <?php //詳細設定
                    genelate_main_column_ad_detail_setting_forms(OP_AD_POS_ABOVE_TITLE_FORMAT, get_ad_pos_above_title_format(), OP_AD_POS_ABOVE_TITLE_LABEL_VISIBLE, is_ad_pos_above_title_label_visible()); ?>
                  </li>
                  <li>
                    <input type="checkbox" name="<?php echo OP_AD_POS_BELOW_TITLE_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_ad_pos_below_title_visible()); ?>><?php _e('タイトル下' ,THEME_NAME ); ?>
                    <?php //詳細設定
                    genelate_main_column_ad_detail_setting_forms(OP_AD_POS_BELOW_TITLE_FORMAT, get_ad_pos_below_title_format(), OP_AD_POS_BELOW_TITLE_LABEL_VISIBLE, is_ad_pos_below_title_label_visible()); ?>
                  </li>
                  <li>
                    <input type="checkbox" name="<?php echo OP_AD_POS_CONTENT_TOP_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_ad_pos_content_top_visible()); ?>><?php _e('本文上' ,THEME_NAME ); ?>
                    <?php //詳細設定
                    genelate_main_column_ad_detail_setting_forms(OP_AD_POS_CONTENT_TOP_FORMAT, get_ad_pos_content_top_format(), OP_AD_POS_CONTENT_TOP_LABEL_VISIBLE, is_ad_pos_content_top_label_visible()); ?>
                  </li>
                  <li>
                    <input type="checkbox" name="<?php echo OP_AD_POS_CONTENT_MIDDLE_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_ad_pos_content_middle_visible()); ?>><?php _e('本文中' ,THEME_NAME ); ?>
                    <?php //詳細設定
                    genelate_main_column_ad_detail_setting_forms(OP_AD_POS_CONTENT_MIDDLE_FORMAT, get_ad_pos_content_middle_format(), OP_AD_POS_CONTENT_MIDDLE_LABEL_VISIBLE, is_ad_pos_content_middle_label_visible(), OP_AD_POS_ALL_CONTENT_MIDDLE_VISIBLE, is_ad_pos_all_content_middle_visible()); ?>
                  </li>
                  <li>
                    <input type="checkbox" name="<?php echo OP_AD_POS_CONTENT_BOTTOM_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_ad_pos_content_bottom_visible()); ?>><?php _e('本文下' ,THEME_NAME ); ?>
                    <?php //詳細設定
                    genelate_main_column_ad_detail_setting_forms(OP_AD_POS_CONTENT_BOTTOM_FORMAT, get_ad_pos_content_bottom_format(), OP_AD_POS_CONTENT_BOTTOM_LABEL_VISIBLE, is_ad_pos_content_bottom_label_visible()); ?>
                  </li>
                  <li>
                    <input type="checkbox" name="<?php echo OP_AD_POS_ABOVE_SNS_BUTTONS_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_ad_pos_above_sns_buttons_visible()); ?>><?php _e('SNSボタン上（本文下部分）' ,THEME_NAME ); ?>
                    <?php //詳細設定
                    genelate_main_column_ad_detail_setting_forms(OP_AD_POS_ABOVE_SNS_BUTTONS_FORMAT, get_ad_pos_above_sns_buttons_format(), OP_AD_POS_ABOVE_SNS_BUTTONS_LABEL_VISIBLE, is_ad_pos_above_sns_buttons_label_visible()); ?>
                  </li>
                  <li>
                    <input type="checkbox" name="<?php echo OP_AD_POS_BELOW_SNS_BUTTONS_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_ad_pos_below_sns_buttons_visible()); ?>><?php _e('SNSボタン下（本文下部分）' ,THEME_NAME ); ?>
                    <?php //詳細設定
                    genelate_main_column_ad_detail_setting_forms(OP_AD_POS_BELOW_SNS_BUTTONS_FORMAT, get_ad_pos_below_sns_buttons_format(), OP_AD_POS_BELOW_SNS_BUTTONS_LABEL_VISIBLE, is_ad_pos_below_sns_buttons_label_visible()); ?>
                  </li>
                  <li>
                    <input type="checkbox" name="<?php echo OP_AD_POS_BELOW_RELATED_POSTS_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_ad_pos_below_related_posts_visible()); ?>><?php _e('関連記事下（投稿ページのみ）' ,THEME_NAME ); ?>
                    <?php //詳細設定
                    genelate_main_column_ad_detail_setting_forms(OP_AD_POS_BELOW_RELATED_POSTS_FORMAT, get_ad_pos_below_related_posts_format(), OP_AD_POS_BELOW_RELATED_POSTS_LABEL_VISIBLE, is_ad_pos_below_related_posts_label_visible()); ?>
                  </li>
                </ul>


              </div>
            </div>

            <p class="tips"><?php _e( 'それぞれのページで広告を表示する位置を設定します。', THEME_NAME ) ?></p>

            <p class="alert"><?php _e( '設定によっては、アドセンスポリシー違反になる可能性もあるので設定後は念入りに動作確認をしてください。', THEME_NAME ) ?></p>

          </td>
        </tr>

      </tbody>
    </table>

  </div>
</div>

<!-- 広告除外設定 -->
<div id="exclude-ads" class="postbox">
  <h2 class="hndle"><?php _e( '広告除外設定', THEME_NAME ) ?></h2>
  <div class="inside">

    <p><?php _e( '広告を表示したくないページやカテゴリの設定です。', THEME_NAME ) ?></p>

    <table class="form-table">
      <tbody>
        <!-- 広告除外記事ID -->
        <tr>
          <th scope="row">
            <?php genelate_label_tag(OP_AD_EXCLUDE_POST_IDS, __( '広告除外記事ID', THEME_NAME )); ?>
          </th>
          <td>
            <?php
            genelate_textbox_tag(OP_AD_EXCLUDE_POST_IDS, get_ad_exclude_post_ids(), __( '例：111,222,3333', THEME_NAME ));
            genelate_tips_tag(__( '広告を非表示にする投稿・固定ページのIDを,（カンマ）区切りで指定してください。', THEME_NAME ));
            ?>
          </td>
        </tr>

        <!-- 広告除外カテゴリーID -->
        <tr>
          <th scope="row">
            <?php genelate_label_tag(OP_AD_EXCLUDE_CATEGORY_IDS, __( '広告除外カテゴリーID', THEME_NAME )); ?>
          </th>
          <td>
            <?php
            genelate_hierarchical_category_check_list( 0, OP_AD_EXCLUDE_CATEGORY_IDS, get_ad_exclude_category_ids(), 300 );
            //genelate_textbox_tag(OP_AD_EXCLUDE_CATEGORY_IDS, get_ad_exclude_category_ids(), __( '例：111,222,3333', THEME_NAME ));
            genelate_tips_tag(__( '広告を表示するカテゴリを選択してください。', THEME_NAME ));
            ?>
          </td>
        </tr>

      </tbody>
    </table>

  </div>
</div>
