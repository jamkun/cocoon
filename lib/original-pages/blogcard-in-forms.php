<div class="metabox-holder">

<!-- 内部ブログカード設定 -->
<div id="title-front" class="postbox">
  <h2 class="hndle"><?php _e( '内部リンクブログカード設定', THEME_NAME ) ?></h2>
  <div class="inside">

    <p><?php _e( 'URLやURLリンクをブログカード形式で表示するための設定です。', THEME_NAME ) ?></p>

    <table class="form-table">
      <tbody>
        <!-- プレビュー画面 -->
        <tr>
          <th scope="row">
            <label><?php _e( 'プレビュー', THEME_NAME ) ?></label>
          </th>
          <td>
            <div class="demo">

            </div>
          </td>
        </tr>

        <!--  ブログカード表示 -->
        <tr>
          <th scope="row">
            <?php genelate_label_tag(OP_INTERNAL_BLOGCARD_ENABLE, __( 'ブログカード表示', THEME_NAME ) ); ?>
          </th>
          <td>
            <?php
            genelate_checkbox_tag(OP_INTERNAL_BLOGCARD_ENABLE, is_internal_blogcard_enable(), __( 'ブログカード表示を有効にする', THEME_NAME ));
            genelate_tips_tag(__( '本文中のURLやURLリンクをブログカード表示します。', THEME_NAME ));
            ?>
          </td>
        </tr>


        <!-- サムネイルスタイル  -->
        <tr>
          <th scope="row">
            <?php genelate_label_tag(OP_INTERNAL_BLOGCARD_THUMBNAIL_STYLE, __( 'サムネイルスタイル', THEME_NAME ) ); ?>
          </th>
          <td>
            <?php
            $options = array(
              'left' => __( '左側', THEME_NAME ),
              'right' => __( '右側', THEME_NAME ),
            );
            genelate_radiobox_tag(OP_INTERNAL_BLOGCARD_THUMBNAIL_STYLE, $options, get_internal_blogcard_thumbnail_style());
            genelate_tips_tag(__( 'サムネイルの表示位置を選択してください。', THEME_NAME ));
            ?>
          </td>
        </tr>


        <!--  リンクの開き方 -->
        <tr>
          <th scope="row">
            <?php genelate_label_tag(OP_INTERNAL_BLOGCARD_TARGET_BLANK, __( 'リンクの開き方', THEME_NAME ) ); ?>
          </th>
          <td>
            <?php
            genelate_checkbox_tag(OP_INTERNAL_BLOGCARD_TARGET_BLANK, is_internal_blogcard_target_blank(), __( '新しいタブで開く', THEME_NAME ));
            genelate_tips_tag(__( 'ブログカードクリック時に新規タブを開きます。', THEME_NAME ));
            ?>
          </td>
        </tr>

      </tbody>
    </table>

  </div>
</div>


</div><!-- /.metabox-holder -->