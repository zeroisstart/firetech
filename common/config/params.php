<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-05 08:35:24
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-05-01 00:59:17
 */
return [
    'uploadFile' => [
        'extensions' => ['jpg', 'png', 'jpeg', 'jpe', 'pdf', 'mp4'],
        'mime_types' => ['image/*', 'application/pdf', 'video/mp4'],
        'max_size' => 10 * 1024 * 1024,
        'min_size' => 1,
        'message' => '上传失败',
        'pluginOptions' => [
            'uploadUrl' => '/upload/upload/uploadfile',

            'showUpload' => true,
            'uploadExtraData' => [
                'field' => 'DdGoods[video]',
                'path' => 'goods',
            ],
            'maxFileCount' => 1,
        ],
        'theme' => 'fa',
    ],
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'user.passwordResetTokenExpire' => 3600,
    'conf' => [],
    'diandiai' => [
        'APP_ID' => '18260702',
        'API_KEY' => 'euSGa9FaVg90vQZsTbIKxPnI',
        'SECRET_KEY' => 'dUhq1DzKOGO2BseeDaqGtQ4EhGto1PSq',
    ],
    // 微信配置
    // 微信配置 具体可参考EasyWechat
    'wechatConfig' => [
        'app_id' => 'wx028eb56f4b4a7d99',
        'secret' => '44f188b226d3c04c403d798d8963817b',
        // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
        'response_type' => 'array',
    ],

    // 微信支付配置 具体可参考EasyWechat
    'wechatPaymentConfig' => [],

    // 微信小程序配置 具体可参考EasyWechat
    'wechatMiniProgramConfig' => [],

    // 微信开放平台第三方平台配置 具体可参考EasyWechat
    'wechatOpenPlatformConfig' => [],

    // 微信企业微信配置 具体可参考EasyWechat
    'wechatWorkConfig' => [],

    // 微信企业微信开放平台 具体可参考EasyWechat
    'wechatOpenWorkConfig' => [],
    'aierror' => [
        0 => 'OK',
        1 => '服务器内部错误，请再次请求， 如果持续出现此类错误，请通过QQ群（860337848）或提交工单联系技术支持团队。',
        2 => '服务暂不可用，请再次请求， 如果持续出现此类错误，请通过QQ群（860337848）或提交工单联系技术支持团队。',
        3 => '调用的API不存在，请检查请求URL后重新尝试，一般为URL中有非英文字符，如“-”，可手动输入重试',
        4 => '集群超限额，请再次请求， 如果持续出现此类错误，请通过QQ群（860337848）或提交工单联系技术支持团队。',
        6 => '无权限访问该用户数据，创建应用时未勾选相关接口',
        13 => '获取token失败',
        14 => 'IAM 鉴权失败',
        15 => '应用不存在或者创建失败',
        17 => '每天请求量超限额，可通过QQ群（860337848）联系群管、提交工单提升限额',
        18 => 'QPS超限额，可通过QQ群（860337848）联系群管、提交工单提升限额',
        19 => '请求总量超限额，可通过QQ群（860337848）联系群管、提交工单提升限额',
        100 => '无效的access_token参数，请检查后重新尝试',
        110 => 'access_token无效',
        111 => 'access token过期',
        222001 => '必要参数未传入',
        222002 => '参数格式错误',
        222003 => '参数格式错误',
        222004 => '参数格式错误',
        222005 => '参数格式错误',
        222006 => '参数格式错误',
        222007 => '参数格式错误',
        222008 => '参数格式错误',
        222009 => '参数格式错误',
        222010 => '参数格式错误',
        222011 => '参数格式错误',
        222012 => '参数格式错误',
        222013 => '参数格式错误',
        222014 => '参数格式错误',
        222015 => '参数格式错误',
        222016 => '参数格式错误',
        222017 => '参数格式错误',
        222018 => '参数格式错误',
        222019 => '参数格式错误',
        222020 => '参数格式错误',
        222021 => '参数格式错误',
        222022 => '参数格式错误',
        222023 => '参数格式错误',
        222024 => '参数格式错误',
        222025 => '参数格式错误',
        222026 => '参数格式错误',
        222201 => '服务端请求失败',
        222202 => '图片中没有人脸',
        222203 => '无法解析人脸',
        222204 => '从图片的url下载图片失败',
        222205 => '服务端请求失败',
        222206 => '服务端请求失败',
        222207 => '未找到匹配的用户',
        222208 => '图片的数量错误',
        222209 => 'face token不存在',
        222300 => '人脸图片添加失败',
        222301 => '获取人脸图片失败',
        222302 => '服务端请求失败',
        222303 => '获取人脸图片失败',
        223100 => '操作的用户组不存在',
        223101 => '该用户组已存在',
        223102 => '该用户已存在',
        223103 => '找不到该用户',
        223104 => 'group_list包含组数量过多',
        223105 => '该人脸已存在',
        223106 => '该人脸不存在',
        223110 => 'uid_list包含数量过多',
        223111 => '目标用户组不存在',
        223112 => 'quality_conf格式不正确',
        223113 => '人脸有被遮挡',
        223114 => '人脸模糊',
        223115 => '人脸光照不好',
        223116 => '人脸不完整',
        223117 => 'app_list包含app数量过多',
        223118 => '质量控制项错误',
        223119 => '活体控制项错误',
        223120 => '活体检测未通过',
        223121 => '质量检测未通过 左眼遮挡程度过高',
        223122 => '质量检测未通过 右眼遮挡程度过高',
        223123 => '质量检测未通过 左脸遮挡程度过高',
        223124 => '质量检测未通过 右脸遮挡程度过高',
        223125 => '质量检测未通过 下巴遮挡程度过高',
        223126 => '质量检测未通过 鼻子遮挡程度过高',
        223127 => '质量检测未通过 嘴巴遮挡程度过高',
        222350 => '公安网图片不存在或质量过低',
        222351 => '身份证号与姓名不匹配或该身份证号不存在',
        222352 => '身份证名字格式错误',
        222353 => '身份证号码格式错误',
        222355 => '身份证号码正确，公安库里没有对应的照片',
        222360 => '身份证号码或名字非法（公安网校验不通过）',
        222901 => '系统繁忙',
        222902 => '系统繁忙',
        222903 => '系统繁忙',
        222904 => '系统繁忙',
        222905 => '系统繁忙',
        222906 => '系统繁忙',
        222907 => '系统繁忙',
        222908 => '系统繁忙',
        222909 => '系统繁忙',
        222910 => '系统繁忙',
        222911 => '系统繁忙',
        222912 => '系统繁忙',
        222913 => '系统繁忙',
        222914 => '系统繁忙',
        222915 => '系统繁忙',
        222916 => '系统繁忙',
        222361 => '系统繁忙',
    ],
];