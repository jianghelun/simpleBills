<?php
#用户表	 
CREATE TABLE `gz_users` (	 
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(10) NOT NULL DEFAULT '' COMMENT '密码',
  `nickname` varchar(20) NOT NULL DEFAULT '' COMMENT '昵称',
  `create_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  `update_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COMMENT='用户表';

    
#记账表
CREATE TABLE `gz_category` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `typename` varchar(20) NOT NULL DEFAULT 0 COMMENT '类型名称',
    `create_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
    `update_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COMMENT='记账分类表';
    
#记账表
CREATE TABLE `gz_bills` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int NOT NULL DEFAULT 0 COMMENT '用户id',
    `type_id` varchar(10) NOT NULL DEFAULT 0 COMMENT '记账类型id',
    `money` decimal(10,2) NOT NULL DEFAULT 0 COMMENT '金额',
    `create_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
    `update_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COMMENT='记账表';
