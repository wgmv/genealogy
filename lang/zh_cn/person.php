<?php

return [
    // Labels
    'biological'      => '生理性别',
    'contact'         => '联系方式',
    'person'          => '人物',
    'person_metadata' => '人员元数据',
    'people'          => '人物',

    'family'  => '家庭',
    'profile' => '人物简介',

    'partner'  => '现任配偶',
    'partners' => '配偶',

    'children'      => '孩子',
    'parents'       => '父母',
    'grandchildren' => '孙子',
    'siblings'      => '兄弟姐妹',
    'ancestors'     => '祖先',
    'descendants'   => '后代',
    'birth'         => '出生',
    'dead'          => '去世',
    'death'         => '死亡',
    'deceased'      => '已故',

    'grandmother'   => '祖母',
    'grandfather'   => '祖父',
    'nieces'        => '侄女',
    'nephews'       => '侄子',
    'cousins'       => '堂兄弟',
    'uncles'        => '叔伯',
    'aunts'         => '姑姑',
    'relationships' => '关系',
    'age'           => '年龄',
    'years'         => '[0,1] 岁|[2,*] 岁',

    'source'           => '来源',
    'source_hint'      => '说明你上传的文件的来源',
    'source_date'      => '日期',
    'source_date_hint' => '选择日期',

    // Actions
    'add_father'                     => '添加父亲',
    'add_new_person_as_father'       => '添加新的人物',
    'add_existing_person_as_father'  => '选择现有的人物',
    'add_mother'                     => '添加母亲',
    'add_new_person_as_mother'       => '添加新的人物',
    'add_existing_person_as_mother'  => '选择现有的人物',
    'add_child'                      => '添加孩子',
    'add_new_person_as_child'        => '添加新的人物',
    'add_existing_person_as_child'   => '选择现有的人物',
    'add_person'                     => '添加人物',
    'add_new_person_as_partner'      => '添加新的人物',
    'add_existing_person_as_partner' => '选择现有的人物',
    'add_person_in_team'             => '在家族 : :team 中添加人物',
    'add_photo'                      => '添加照片',
    'add_relationship'               => '添加配偶',

    'edit'              => '编辑',
    'edit_children'     => '编辑孩子',
    'edit_contact'      => '编辑联系信息',
    'edit_death'        => '编辑死亡信息',
    'edit_family'       => '编辑家庭',
    'edit_files'        => '编辑文件',
    'edit_person'       => '编辑人物',
    'edit_profile'      => '编辑信息',
    'edit_relationship' => '编辑关系',

    'delete_child'        => '删除孩子',
    'delete_person'       => '删除人物',
    'delete_relationship' => '解除关系',

    // Attributes
    'id'          => 'ID',
    'name'        => '姓名',
    'names'       => '姓名',
    'firstname'   => '名',
    'surname'     => '姓',
    'birthname'   => '出生名',
    'nickname'    => '昵称',
    'sex'         => '性别',
    'gender'      => '性别认同',
    'father'      => '亲生父亲',
    'mother'      => '亲生母亲',
    'parent'      => '父母',
    'dob'         => '出生日期',
    'yob'         => '出生年份',
    'pob'         => '出生地',
    'dod'         => '死亡日期',
    'yod'         => '死亡年份',
    'pod'         => '死亡地',
    'summary'     => '人物事迹',
    'email'       => '邮箱',
    'password'    => '密码',
    'address'     => '地址',
    'street'      => '街道',
    'number'      => '门牌号',
    'postal_code' => '邮政编码',
    'city'        => '城市',
    'province'    => '省、市',
    'state'       => '区、县',
    'country'     => '国家',
    'phone'       => '电话',

    'cemetery'          => '墓地',
    'cemetery_location' => '墓地位置',

    // files
    'upload_files'     => '上传文件',
    'files'            => '文件',
    'files_saved'      => '[0] 没有文件保存|[1] 文件已保存|[2,*] 文件已保存',
    'file'             => '文件',
    'file_deleted'     => '文件已删除',
    'update_files_tip' => '将文件拖放到此处',

    // Photo
    'avatar'            => '头像',
    'edit_photos'       => '编辑照片',
    'photo_deleted'     => '照片已删除',
    'photo'             => '照片',
    'photos'            => '相簿',
    'photos_saved'      => '[0] 没有照片保存|[1] 照片已保存|[2,*] 照片已保存',
    'photos_existing'   => '现有照片',
    'set_primary'       => '设为主照片',
    'upload_photos'     => '上传照片',
    'update_photos_tip' => '将照片拖放到此处',

    // Messages
    'yod_not_matching_dod' => '死亡年份必须与死亡日期匹配 (:value)。',
    'yod_before_dob'       => '死亡年份不能早于出生日期 (:value)。',
    'yod_before_yob'       => '死亡年份不能早于出生年份 (:value)。',

    'dod_not_matching_yod' => '死亡日期必须与死亡年份匹配 (:value)。',
    'dod_before_dob'       => '死亡日期不能早于出生日期 (:value)。',
    'dod_before_yob'       => '死亡日期不能早于出生年份 (:value)。',

    'yob_not_matching_dob' => '出生年份必须与出生日期匹配 (:value)。',
    'yob_after_dod'        => '出生年份不能晚于死亡日期 (:value)。',
    'yob_after_yod'        => '出生年份不能晚于死亡年份 (:value)。',

    'dob_not_matching_yob' => '出生日期必须与出生年份匹配 (:value)。',
    'dob_after_dod'        => '出生日期不能晚于死亡日期 (:value)。',
    'dob_after_yod'        => '出生日期不能晚于死亡年份 (:value)。',

    'not_found' => '没有找到此人',
    'use_tab'   => '使用选项卡',
];
