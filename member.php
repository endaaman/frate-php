<?php require_once('./header.php') ?>

<?php

// 部員情報はこの定義を編集する
// PHPに慣れてきたらDBに突っ込んだりするとよろし

$memberList = [
  [
    'grade' => '6年目',
    'members' => [
      [
        'name' => 'うぎ',
        'desc' => '江別の狂犬。 The mad dog of Ebetsu。',
        'visible' => true
      ],
      [
        'name' => '缶',
        'desc' => '口笛がとても上手い。',
        'visible' => true
      ],
      [
        'name' => 'OTTI',
        'desc' => '旧サイト管理人。',
        'visible' => true
      ],
      [
        'name' => '哲',
        'desc' => '山のインターハイで優勝という輝かしい実績を持つ。',
        'visible' => true
      ],
      [
        'name' => '亀',
        'desc' => '日々の生活の様子を聞くたびに自宅とは何かということを考えさせられる。',
        'visible' => true
      ],
    ]
  ],
  [
    'grade' => '5年目',
    'members' => [
      [
        'name' => 'えん',
        'desc' => '新ホームページ管理人。頑張りました。',
        'visible' => true
      ],
      [
        'name' => '林',
        'desc' => '札医からの刺客。',
        'visible' => true
      ],
      [
        'name' => '↑（うえ）',
        'desc' => '口癖は「まあまあまあまあ^^;」',
        'visible' => true
      ],
    ]
  ],
  [
    'grade' => '4年目',
    'members' => [
      [
        'name' => '清',
        'desc' => '肩の手術によりサイボーグと化した元人間。',
        'visible' => true
      ],
      [
        'name' => 'ゲバラ',
        'desc' => '入部1年目にしてマダニ4匹に食われる札医からの刺客。',
        'visible' => true
      ],
      [
        'name' => 'ポトフ',
        'desc' => '本人はあまりこのあだ名を気に入っていない様子。',
        'visible' => true
      ],
    ]
  ],
  [
    'grade' => '3年目',
    'members' => [
      [
        'name' => 'NINJA',
        'desc' => '部員騒然の「大学では山はやりません」発言からの入部。今思えばフラグだった。',
        'visible' => true
      ],
      [
        'name' => '明るい',
        'desc' => '某部員と元同期。情報通すぎて敵に回すのが怖い。',
        'visible' => true
      ]
    ]
  ],
  [
    'grade' => '2年目',
    'members' => [
      [
        'name' => 'ゆうり',
        'desc' => '7年ぶりの女子部員。料理部出身。食計に期待。',
        'visible' => true
      ],
      [
        'name' => 'ヒロポン',
        'desc' => 'スズキ・メソード出身のバイオリン弾き。',
        'visible' => true
      ],
      [
        'name' => 'ツモ',
        'desc' => '所持携帯はiPhone 6 plus。',
        'visible' => true
      ],
      [
        'name' => 'ロン',
        'desc' => '響け！ユーフォニアム。',
        'visible' => true
      ]
    ]
  ]
]


// 上記の定義に従って二重ループでHTMLを生成
?>
<div class="container">
  <div class="row box box-glass">
    <div class="col-xs-12">
      <h3>部員紹介</h4>
      <?php foreach ($memberList as $group) { ?>
      <div class="panel panel-default">
        <div class="panel-heading"><h4><?= $group['grade'] ?></h4></div>
        <ul class="list-group">
          <?php foreach ($group['members'] as $member) { ?>
          <?php if ($member['visible']) { ?>
          <li class="list-group-item">
            <h4><?= $member['name'] ?></h4>
            <p><?= $member['desc'] ?></p>
          </li>
          <?php } ?>
          <?php } ?>
        </ul>
      </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php require_once('./footer.php') ?>
