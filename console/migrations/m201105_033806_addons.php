<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-11-17 15:26:44
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-11-17 15:26:44
 */
 

use yii\db\Migration;

class m201105_033806_addons extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%addons}}', [
            'mid' => "int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '模块id'",
            'identifie' => "varchar(100) NOT NULL COMMENT '英文标识'",
            'type' => "enum('base','business','marketing','member','other','system','enterprise','services') NOT NULL DEFAULT 'base' COMMENT '模块类型'",
            'title' => "varchar(100) NOT NULL COMMENT '名称'",
            'version' => "varchar(15) NOT NULL COMMENT '版本'",
            'ability' => "varchar(500) NOT NULL COMMENT '简介'",
            'description' => "varchar(1000) NOT NULL COMMENT '描述'",
            'author' => "varchar(50) NOT NULL COMMENT '作者'",
            'url' => "varchar(255) NOT NULL COMMENT '社区地址'",
            'settings' => "tinyint(1) NOT NULL DEFAULT '0' COMMENT '配置'",
            'logo' => "varchar(250) NOT NULL COMMENT 'logo'",
            'versions' => "varchar(50) NULL COMMENT '适应的软件版本'",
            'is_install' => "tinyint(1) NULL",
            'PRIMARY KEY (`mid`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='扩展模块表'");
        
        /* 索引设置 */
        $this->createIndex('idx_name','{{%addons}}','identifie',0);
        
        
      
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%addons}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

