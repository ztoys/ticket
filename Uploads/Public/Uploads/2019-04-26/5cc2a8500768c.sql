/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : ticket_thinkphp

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2019-04-24 19:04:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ticket_addwork
-- ----------------------------
DROP TABLE IF EXISTS `ticket_addwork`;
CREATE TABLE `ticket_addwork` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tz_status` enum('1','-1') NOT NULL DEFAULT '-1',
  `g_reply` text NOT NULL,
  `repdate` varchar(250) NOT NULL,
  `pid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=187 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ticket_addwork
-- ----------------------------
INSERT INTO `ticket_addwork` VALUES ('32', '-1', '<p>【V4.0.14自建H5工作台部分账号没有显示】<br/>https://www.tapd.cn/63456907/bugtrace/bugs/view?bug_id=1163456907001003129<br/>这个bug原因是，装了新版之后之前创建的自定义app模板没有加上H5应用这个app(sysHtmlDeskAssistant)<br/><br/></p>', '1553238588', '38', '57');
INSERT INTO `ticket_addwork` VALUES ('33', '-1', '<p>好的 收到</p>', '1553238639', '38', '58');
INSERT INTO `ticket_addwork` VALUES ('34', '-1', '<p>处理中。。。。。。<br/></p>', '1553239499', '39', '57');
INSERT INTO `ticket_addwork` VALUES ('35', '-1', '<p><img src=\"http://10.0.0.224/ticket/haoidcn/Admin/Public/baidubianjiqi/php/upload/20190322/1553257431290.jpg\" _src=\"http://10.0.0.224/ticket/haoidcn/Admin/Public/baidubianjiqi/php/upload/20190322/1553257431290.jpg\"/></p>', '1553257433', '43', '57');
INSERT INTO `ticket_addwork` VALUES ('36', '-1', '<p>TTesssse<br/></p>', '1553324064', '41', '57');
INSERT INTO `ticket_addwork` VALUES ('37', '-1', '<p>tetee</p><p><br/></p>', '1553324096', '41', '57');
INSERT INTO `ticket_addwork` VALUES ('38', '-1', '<p>ttessAAAAAA<br/></p>', '1553324112', '41', '57');
INSERT INTO `ticket_addwork` VALUES ('39', '-1', '<p>TEDLKASDKASNDOLKC</p><p><br/></p>', '1553325910', '44', '57');
INSERT INTO `ticket_addwork` VALUES ('40', '-1', '<p>asdasdasd啊实打实的<br/></p><p>阿萨大大是</p><p>asdasdasd啊实打实的<br/></p><p>asdasdasd啊实打实的<br/></p><p>asdasdasd啊实打实的<br/></p><p>asdasdasd啊实打实的<br/></p><p><br/></p>', '1553325923', '44', '57');
INSERT INTO `ticket_addwork` VALUES ('41', '-1', '<p>close Test 1</p>', '1553332152', '44', '58');
INSERT INTO `ticket_addwork` VALUES ('42', '1', '<p>tteetetet</p>', '1553343538', '45', '58');
INSERT INTO `ticket_addwork` VALUES ('43', '-1', '<p>呃呃呃<br/></p>', '1553343549', '45', '57');
INSERT INTO `ticket_addwork` VALUES ('44', '-1', '<p>11111</p>', '1553432152', '59', '58');
INSERT INTO `ticket_addwork` VALUES ('45', '-1', '<p>Teeeetss<br/></p>', '1553432880', '59', '57');
INSERT INTO `ticket_addwork` VALUES ('46', '-1', '<p>TETEEjodfpbgjsdfjb</p>', '1553433972', '57', '58');
INSERT INTO `ticket_addwork` VALUES ('47', '-1', '<p>ttee</p>', '1553434037', '59', '58');
INSERT INTO `ticket_addwork` VALUES ('48', '-1', '<p>and Life Wheel breaks the every tear</p>', '1553434267', '59', '58');
INSERT INTO `ticket_addwork` VALUES ('49', '-1', '<p>ttttttt</p>', '1553479954', '58', '58');
INSERT INTO `ticket_addwork` VALUES ('50', '-1', '<p>eeeetetete zhuan gei yunwei</p>', '1553480534', '58', '58');
INSERT INTO `ticket_addwork` VALUES ('51', '-1', '<p>Test turn out</p>', '1553480730', '58', '58');
INSERT INTO `ticket_addwork` VALUES ('52', '-1', '<p>TTTEasdasd</p>', '1553580889', '33', '57');
INSERT INTO `ticket_addwork` VALUES ('53', '-1', '<p>OKOKOKOKOKOKOKOKOKOKO<br/></p>', '1553580948', '33', '58');
INSERT INTO `ticket_addwork` VALUES ('54', '-1', '<p>tewrwewer</p>', '1553581734', '33', '57');
INSERT INTO `ticket_addwork` VALUES ('55', '-1', '<p>tewrwewer<br/></p>', '1553581855', '33', '58');
INSERT INTO `ticket_addwork` VALUES ('56', '-1', '<p>1123</p>', '1553582389', '48', '58');
INSERT INTO `ticket_addwork` VALUES ('57', '-1', '<p>This is Agent1 Text</p>', '1553586669', '62', '57');
INSERT INTO `ticket_addwork` VALUES ('58', '-1', '<p>TTTe</p>', '1553656313', '61', '57');
INSERT INTO `ticket_addwork` VALUES ('59', '-1', '<p>Agnet2， 这个工单你来处理下吧</p>', '1553671938', '61', '57');
INSERT INTO `ticket_addwork` VALUES ('60', '-1', '<p>MMP, agent1 你处理吧</p>', '1553673098', '61', '62');
INSERT INTO `ticket_addwork` VALUES ('61', '-1', '<p>算了，先放着吧</p>', '1553673168', '61', '57');
INSERT INTO `ticket_addwork` VALUES ('62', '-1', '<p><strong><span style=\"font-family:微软雅黑, Microsoft YaHei;font-size:18px;color:#31859b\">Test Success</span></strong></p>', '1553673444', '42', '57');
INSERT INTO `ticket_addwork` VALUES ('63', '-1', '<p>set the ticket to Agent2</p>', '1553756059', '64', '57');
INSERT INTO `ticket_addwork` VALUES ('64', '-1', '<p>User1 can get this</p>', '1553756263', '64', '58');
INSERT INTO `ticket_addwork` VALUES ('65', '-1', '<p>User1 send Text&nbsp;</p>', '1553756656', '64', '58');
INSERT INTO `ticket_addwork` VALUES ('66', '-1', '<p>Teee</p>', '1553825540', '63', '58');
INSERT INTO `ticket_addwork` VALUES ('67', '-1', '<p>tetete</p>', '1553825594', '63', '57');
INSERT INTO `ticket_addwork` VALUES ('68', '-1', '<p>tetete</p>', '1553827873', '57', '58');
INSERT INTO `ticket_addwork` VALUES ('69', '-1', '<p>NAZIONAOSDOAKSLKZXCASD</p>', '1553827881', '57', '58');
INSERT INTO `ticket_addwork` VALUES ('70', '-1', '<p>ZZXDDDAAAA<br/></p>', '1553841057', '65', '62');
INSERT INTO `ticket_addwork` VALUES ('71', '-1', '<p>TEQACASAS</p>', '1553841080', '65', '60');
INSERT INTO `ticket_addwork` VALUES ('72', '-1', '<p>ASCZXCAA<br/></p>', '1553841096', '65', '62');
INSERT INTO `ticket_addwork` VALUES ('73', '-1', '<p>ZCZXCAAQQ</p>', '1553841105', '65', '60');
INSERT INTO `ticket_addwork` VALUES ('74', '-1', '<p>CXZXCAASSAD<br/></p>', '1553841117', '65', '62');
INSERT INTO `ticket_addwork` VALUES ('75', '-1', '<p>Testt<br/></p>', '1553841996', '66', '62');
INSERT INTO `ticket_addwork` VALUES ('76', '-1', '<p>TTTEE<br/></p>', '1553842426', '66', '62');
INSERT INTO `ticket_addwork` VALUES ('77', '-1', '<p>eeete</p>', '1553842451', '66', '58');
INSERT INTO `ticket_addwork` VALUES ('78', '-1', '<p>AAAABBBBBCCCCCC<br/></p>', '1553842471', '66', '62');
INSERT INTO `ticket_addwork` VALUES ('79', '-1', '<p>TTNDA</p>', '1554021977', '68', '79');
INSERT INTO `ticket_addwork` VALUES ('80', '-1', '<p>asdasdddddd</p>', '1554022019', '69', '79');
INSERT INTO `ticket_addwork` VALUES ('81', '-1', '<p>TeTeTe</p>', '1554100014', '70', '79');
INSERT INTO `ticket_addwork` VALUES ('82', '-1', '<p>AAAS</p>', '1554100030', '67', '79');
INSERT INTO `ticket_addwork` VALUES ('83', '-1', '<p>点击提交工单<br/></p>', '1554104815', '71', '83');
INSERT INTO `ticket_addwork` VALUES ('84', '-1', '<p>邓家佳</p>', '1554104848', '71', '82');
INSERT INTO `ticket_addwork` VALUES ('85', '-1', '<p>123</p>', '1554105302', '72', '82');
INSERT INTO `ticket_addwork` VALUES ('86', '-1', '<p>adouk<br/></p>', '1554105527', '73', '83');
INSERT INTO `ticket_addwork` VALUES ('87', '-1', '<p>111<br/></p>', '1554105597', '61', '83');
INSERT INTO `ticket_addwork` VALUES ('88', '-1', '<p>你好你好<br/></p>', '1554105665', '74', '83');
INSERT INTO `ticket_addwork` VALUES ('89', '-1', '<p>红啊好后</p>', '1554105683', '74', '82');
INSERT INTO `ticket_addwork` VALUES ('90', '-1', '<p>xingxing<br/></p>', '1554105699', '74', '83');
INSERT INTO `ticket_addwork` VALUES ('91', '-1', '<p>ok&nbsp;你服务得很好&nbsp;五颗星给你</p>', '1554105717', '74', '82');
INSERT INTO `ticket_addwork` VALUES ('92', '-1', '<p>admin TT</p>', '1554113518', '72', '56');
INSERT INTO `ticket_addwork` VALUES ('93', '-1', '<p>123</p>', '1554113853', '63', '56');
INSERT INTO `ticket_addwork` VALUES ('94', '-1', '<p>asdnkkzxc</p><p>nzkxnclkasd</p><p>nzxcknasd</p><p>njkzxckas;kd</p><p><br/></p>', '1554115976', '75', '78');
INSERT INTO `ticket_addwork` VALUES ('95', '-1', '<p>nzxjcn</p><p>zxncjnasdheoiqw</p><p>mzkxncklasd</p><p>nzxnvclkasd&#39;<br/><br/></p>', '1554116059', '75', '79');
INSERT INTO `ticket_addwork` VALUES ('96', '-1', '<p><br/><sup>sdasd</sup></p><p><sup>zxcnikasd</sup></p><p><sup>xzcaaa</sup></p>', '1554169898', '70', '79');
INSERT INTO `ticket_addwork` VALUES ('97', '-1', '<p>123</p>', '1554174503', '61', '79');
INSERT INTO `ticket_addwork` VALUES ('98', '-1', '<p>22</p>', '1554174519', '61', '79');
INSERT INTO `ticket_addwork` VALUES ('99', '-1', '<p>11</p>', '1554175270', '61', '79');
INSERT INTO `ticket_addwork` VALUES ('100', '-1', '<p>qq</p>', '1554175322', '61', '79');
INSERT INTO `ticket_addwork` VALUES ('101', '-1', '<p>ww</p>', '1554175362', '61', '79');
INSERT INTO `ticket_addwork` VALUES ('102', '-1', '<p>11</p>', '1554175418', '61', '79');
INSERT INTO `ticket_addwork` VALUES ('103', '-1', '<p>11</p>', '1554175432', '61', '79');
INSERT INTO `ticket_addwork` VALUES ('104', '-1', '<p>11</p>', '1554175457', '56', '79');
INSERT INTO `ticket_addwork` VALUES ('105', '-1', '<p>22</p>', '1554175618', '56', '79');
INSERT INTO `ticket_addwork` VALUES ('106', '-1', '<p>33</p>', '1554175927', '56', '79');
INSERT INTO `ticket_addwork` VALUES ('107', '-1', '<p>44</p>', '1554175977', '56', '79');
INSERT INTO `ticket_addwork` VALUES ('108', '-1', '<p>55</p>', '1554176010', '56', '79');
INSERT INTO `ticket_addwork` VALUES ('109', '-1', '<p>66</p>', '1554176082', '56', '79');
INSERT INTO `ticket_addwork` VALUES ('110', '-1', '<p>112</p>', '1554176105', '56', '79');
INSERT INTO `ticket_addwork` VALUES ('111', '-1', '<p>asddd</p>', '1554176121', '56', '79');
INSERT INTO `ticket_addwork` VALUES ('112', '-1', '<p>12333</p>', '1554176133', '56', '79');
INSERT INTO `ticket_addwork` VALUES ('113', '-1', '<p>aaazz</p>', '1554176150', '55', '79');
INSERT INTO `ticket_addwork` VALUES ('114', '-1', '<p>ssszz</p>', '1554176170', '55', '79');
INSERT INTO `ticket_addwork` VALUES ('115', '-1', '<p>ssssa</p>', '1554176180', '55', '79');
INSERT INTO `ticket_addwork` VALUES ('116', '-1', '<p>ASD</p>', '1554187393', '67', '78');
INSERT INTO `ticket_addwork` VALUES ('117', '-1', '<p>11233</p>', '1554187414', '67', '78');
INSERT INTO `ticket_addwork` VALUES ('118', '-1', '<p>123123123</p>', '1554188253', '70', '78');
INSERT INTO `ticket_addwork` VALUES ('119', '-1', '<p>222</p>', '1554188383', '70', '78');
INSERT INTO `ticket_addwork` VALUES ('120', '-1', '<p>1123</p>', '1554189063', '70', '78');
INSERT INTO `ticket_addwork` VALUES ('121', '-1', '<p>zxczxczxc</p>', '1554189067', '70', '78');
INSERT INTO `ticket_addwork` VALUES ('122', '-1', '<p>zxczxcsad</p>', '1554189121', '67', '78');
INSERT INTO `ticket_addwork` VALUES ('123', '-1', '<p>asdasd</p>', '1554189132', '75', '78');
INSERT INTO `ticket_addwork` VALUES ('124', '-1', '<p>qweqwe</p>', '1554189136', '75', '78');
INSERT INTO `ticket_addwork` VALUES ('125', '-1', '<p>123123123</p>', '1554189547', '75', '79');
INSERT INTO `ticket_addwork` VALUES ('126', '-1', '<p>xxxxxxx</p>', '1554189616', '75', '79');
INSERT INTO `ticket_addwork` VALUES ('127', '-1', '<p>cccccccccccc</p>', '1554189713', '75', '79');
INSERT INTO `ticket_addwork` VALUES ('128', '-1', '<p>xxxxxxxxxxxxxxxx</p>', '1554189727', '68', '79');
INSERT INTO `ticket_addwork` VALUES ('129', '-1', '<p>qweqweqwe</p>', '1554189735', '68', '79');
INSERT INTO `ticket_addwork` VALUES ('130', '-1', '<p>vzxvzxv</p>', '1554189743', '67', '79');
INSERT INTO `ticket_addwork` VALUES ('131', '-1', '<p>asadasdasd</p>', '1554190205', '51', '56');
INSERT INTO `ticket_addwork` VALUES ('132', '-1', '<p>sssss</p>', '1554190218', '54', '56');
INSERT INTO `ticket_addwork` VALUES ('133', '-1', '<p>asdasd</p>', '1554190269', '52', '56');
INSERT INTO `ticket_addwork` VALUES ('134', '-1', '<p>aaaa</p>', '1554190278', '53', '56');
INSERT INTO `ticket_addwork` VALUES ('135', '-1', '<p>asdasdasd</p>', '1554191061', '67', '78');
INSERT INTO `ticket_addwork` VALUES ('136', '-1', '<p>zxczxcasd</p>', '1554191064', '67', '78');
INSERT INTO `ticket_addwork` VALUES ('137', '-1', '<p>asdzxcasd</p><p>asdasdasd</p>', '1554191069', '67', '78');
INSERT INTO `ticket_addwork` VALUES ('138', '-1', '<p>zxczxcasd</p>', '1554191072', '67', '78');
INSERT INTO `ticket_addwork` VALUES ('139', '-1', '<p>asdasdasd</p>', '1554191075', '67', '78');
INSERT INTO `ticket_addwork` VALUES ('140', '-1', '<p>asdasdasd</p>', '1554191079', '67', '78');
INSERT INTO `ticket_addwork` VALUES ('141', '-1', '<p>123123123</p>', '1554194123', '54', '79');
INSERT INTO `ticket_addwork` VALUES ('142', '-1', '<p>zxczxczcx</p>', '1554194146', '51', '79');
INSERT INTO `ticket_addwork` VALUES ('143', '-1', '<p>xczxczxc</p>', '1554194163', '52', '79');
INSERT INTO `ticket_addwork` VALUES ('144', '-1', '<p>asdasdasd</p>', '1554194219', '37', '79');
INSERT INTO `ticket_addwork` VALUES ('145', '-1', '<p>asdasdasd</p>', '1554194236', '36', '79');
INSERT INTO `ticket_addwork` VALUES ('146', '-1', '<p>ssdfsdfsdfsdf</p>', '1554194287', '35', '79');
INSERT INTO `ticket_addwork` VALUES ('147', '-1', '<p>zxczxczxczxc</p>', '1554194314', '51', '79');
INSERT INTO `ticket_addwork` VALUES ('148', '-1', '<p>asdasdasd</p>', '1554194385', '79', '79');
INSERT INTO `ticket_addwork` VALUES ('149', '-1', '<p>zxczxcasdasd</p>', '1554194393', '78', '79');
INSERT INTO `ticket_addwork` VALUES ('150', '-1', '<p>asdaszxcsdgsdfsdfsdf</p>', '1554194407', '76', '79');
INSERT INTO `ticket_addwork` VALUES ('151', '-1', '<p>xcbsdfbghsdfgsdfsvd</p>', '1554194417', '77', '79');
INSERT INTO `ticket_addwork` VALUES ('152', '-1', '<p>好的好的</p><p>可以</p>', '1554202215', '47', '83');
INSERT INTO `ticket_addwork` VALUES ('153', '-1', '<p>ok</p><p><br/></p>', '1554202264', '47', '83');
INSERT INTO `ticket_addwork` VALUES ('154', '-1', '<p>您好</p>', '1554255480', '80', '83');
INSERT INTO `ticket_addwork` VALUES ('155', '-1', '<p>qweqwe<br/></p>', '1554258278', '81', '79');
INSERT INTO `ticket_addwork` VALUES ('156', '-1', '<p>an</p><p><br/></p>', '1554259152', '81', '90');
INSERT INTO `ticket_addwork` VALUES ('157', '-1', '<p>dfas</p>', '1554259473', '82', '79');
INSERT INTO `ticket_addwork` VALUES ('158', '-1', '<p>fd</p>', '1554259515', '82', '79');
INSERT INTO `ticket_addwork` VALUES ('159', '-1', '<p>12312311</p>', '1554260335', '83', '89');
INSERT INTO `ticket_addwork` VALUES ('160', '-1', '<p>asdddd</p>', '1554260423', '83', '89');
INSERT INTO `ticket_addwork` VALUES ('161', '-1', '<p>11</p><p><br/></p>', '1554260672', '82', '79');
INSERT INTO `ticket_addwork` VALUES ('162', '-1', '<p>123</p>', '1554263412', '80', '83');
INSERT INTO `ticket_addwork` VALUES ('163', '-1', '<p>能不能看看</p>', '1554263830', '85', '82');
INSERT INTO `ticket_addwork` VALUES ('164', '-1', '<p>qweqwe</p>', '1554271921', '84', '89');
INSERT INTO `ticket_addwork` VALUES ('165', '-1', '<p>asdsad</p>', '1554271935', '84', '89');
INSERT INTO `ticket_addwork` VALUES ('166', '-1', '<p>qqq</p>', '1554273749', '84', '89');
INSERT INTO `ticket_addwork` VALUES ('167', '-1', '<p>ssaAA</p>', '1554274001', '84', '78');
INSERT INTO `ticket_addwork` VALUES ('168', '-1', '<p>ssss</p>', '1554274107', '86', '56');
INSERT INTO `ticket_addwork` VALUES ('169', '-1', '<p>xxaxxxx</p>', '1554274507', '83', '78');
INSERT INTO `ticket_addwork` VALUES ('170', '-1', '<p style=\"box-sizing: border-box; outline: 0px; margin: 0px 0px 16px; padding: 0px; font-family: &#39;Microsoft YaHei&#39;, &#39;SF Pro Display&#39;, Roboto, Noto, Arial, &#39;PingFang SC&#39;, sans-serif; font-size: 16px; color: rgb(79, 79, 79); font-weight: normal; line-height: 26px; overflow-x: auto; word-wrap: break-word; font-style: normal; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\">CEF加载慢的时候，加上以下代码，通过命令行的方式:</p><pre style=\"box-sizing: border-box; outline: 0px; margin: 0px 0px 24px; padding: 8px; position: relative; font-family: Consolas, Inconsolata, Courier, monospace; white-space: pre-wrap; word-wrap: break-word; overflow-x: auto; font-size: 14px; line-height: 22px; color: rgb(0, 0, 0); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\">CefRefPtr&lt;CefCommandLine&gt; command_line;\r\ncommand_line = CefCommandLine::CreateCommandLine();\r\ncommand_line-&gt;AppendSwitch(&quot;no-proxy-server&quot;);//加载慢，关闭代理试试</pre><p><br/></p>', '1554697555', '87', '93');
INSERT INTO `ticket_addwork` VALUES ('171', '-1', '<pre style=\"box-sizing: border-box; outline-style: initial; outline-width: 0px; margin-bottom: 24px; padding: 8px; position: relative; font-family: Consolas, Inconsolata, Courier, monospace; overflow-x: auto; font-size: 14px; line-height: 22px; color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">CefRefPtr&lt;CefCommandLine&gt; command_line;\r\ncommand_line = CefCommandLine::CreateCommandLine();\r\ncommand_line-&gt;AppendSwitch(&quot;no-proxy-server&quot;);//加载慢，关闭代理试试</pre><p><br/></p>', '1554699098', '88', '78');
INSERT INTO `ticket_addwork` VALUES ('172', '-1', '<p style=\"box-sizing: border-box; outline: 0px; margin: 0px 0px 16px; padding: 0px; font-family: &#39;Microsoft YaHei&#39;, &#39;SF Pro Display&#39;, Roboto, Noto, Arial, &#39;PingFang SC&#39;, sans-serif; font-size: 16px; color: rgb(79, 79, 79); font-weight: normal; line-height: 26px; overflow-x: auto; word-wrap: break-word; font-style: normal; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\">用户自己通过这个方法（https://blog.csdn.net/wishfly/article/details/82910120）解决了。</p><pre style=\"box-sizing: border-box; outline: 0px; margin: 0px 0px 24px; padding: 8px; position: relative; font-family: Consolas, Inconsolata, Courier, monospace; white-space: pre-wrap; word-wrap: break-word; overflow-x: auto; font-size: 14px; line-height: 22px; color: rgb(0, 0, 0); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\"><p></p></pre><p><br/></p>', '1554699188', '87', '93');
INSERT INTO `ticket_addwork` VALUES ('173', '-1', '<pre style=\"padding: 8px; font-family: Consolas, Inconsolata, Courier, monospace; font-size: 14px; color: rgb(0, 0, 0); margin-bottom: 24px; line-height: 22px; background-color: rgb(255, 255, 255); outline-style: initial; outline-width: 0px; box-sizing: border-box; position: relative; overflow-x: auto;\">CefRefPtr&lt;CefCommandLine&gt; command_line;\r\ncommand_line = CefCommandLine::CreateCommandLine();\r\ncommand_line-&gt;AppendSwitch(&quot;no-proxy-server&quot;);//加载慢，关闭代理试试</pre><p><br/></p>', '1554699204', '88', '78');
INSERT INTO `ticket_addwork` VALUES ('174', '-1', '<p>时间快捷</p>', '1555404185', '85', '56');
INSERT INTO `ticket_addwork` VALUES ('175', '-1', '<p>123</p>', '1555404192', '85', '56');
INSERT INTO `ticket_addwork` VALUES ('176', '-1', 'sssddA', '1555642447', '91', '56');
INSERT INTO `ticket_addwork` VALUES ('177', '-1', 'aaAAAA', '1555643462', '91', '95');
INSERT INTO `ticket_addwork` VALUES ('178', '-1', 'OOPOPOPOOOOOO', '1555643520', '91', '95');
INSERT INTO `ticket_addwork` VALUES ('179', '-1', 'VVA', '1555643643', '90', '75');
INSERT INTO `ticket_addwork` VALUES ('180', '-1', 'AADDD', '1556002272', '105', '75');
INSERT INTO `ticket_addwork` VALUES ('181', '-1', 'cCC', '1556002276', '105', '75');
INSERT INTO `ticket_addwork` VALUES ('182', '-1', 'AADDD', '1556086686', '112', '75');
INSERT INTO `ticket_addwork` VALUES ('183', '-1', 'AAC', '1556087036', '113', '95');
INSERT INTO `ticket_addwork` VALUES ('184', '-1', 'CAAASD', '1556087923', '94', '56');
INSERT INTO `ticket_addwork` VALUES ('185', '-1', 'CCZZZADMIN', '1556088003', '116', '56');
INSERT INTO `ticket_addwork` VALUES ('186', '-1', '第一点比较耗时间', '1556102521', '114', '75');

-- ----------------------------
-- Table structure for ticket_config
-- ----------------------------
DROP TABLE IF EXISTS `ticket_config`;
CREATE TABLE `ticket_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mail_address` varchar(250) NOT NULL,
  `mail_smtp` varchar(250) NOT NULL,
  `mail_loginname` varchar(250) NOT NULL,
  `mail_password` varchar(250) NOT NULL,
  `mail_formname` varchar(250) NOT NULL,
  `phone_target` varchar(250) NOT NULL,
  `phone_user` varchar(250) NOT NULL,
  `phone_pass` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ticket_config
-- ----------------------------

-- ----------------------------
-- Table structure for ticket_ecomment
-- ----------------------------
DROP TABLE IF EXISTS `ticket_ecomment`;
CREATE TABLE `ticket_ecomment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `remark` varchar(250) NOT NULL,
  `s_grade` enum('2','1') NOT NULL,
  `f_grade` enum('2','1') NOT NULL,
  `pj_date` varchar(250) NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ticket_ecomment
-- ----------------------------

-- ----------------------------
-- Table structure for ticket_evaluation
-- ----------------------------
DROP TABLE IF EXISTS `ticket_evaluation`;
CREATE TABLE `ticket_evaluation` (
  `work_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resolve` varchar(255) NOT NULL,
  `assess` varchar(255) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `create_time` bigint(20) NOT NULL,
  PRIMARY KEY (`work_id`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ticket_evaluation
-- ----------------------------
INSERT INTO `ticket_evaluation` VALUES ('44', '1', '2', null, '1553332345');
INSERT INTO `ticket_evaluation` VALUES ('59', '1', '2', null, '1553486945');
INSERT INTO `ticket_evaluation` VALUES ('40', '1', '3', null, '1553583537');
INSERT INTO `ticket_evaluation` VALUES ('42', '1', '3', null, '1553673870');
INSERT INTO `ticket_evaluation` VALUES ('57', '1', '2', null, '1553827930');
INSERT INTO `ticket_evaluation` VALUES ('65', '1', '2', null, '1553841128');
INSERT INTO `ticket_evaluation` VALUES ('64', '1', '3', null, '1553841429');
INSERT INTO `ticket_evaluation` VALUES ('69', '1', '2', null, '1554022068');
INSERT INTO `ticket_evaluation` VALUES ('74', '1', '3', null, '1554105795');
INSERT INTO `ticket_evaluation` VALUES ('67', '1', '1', null, '1554191721');
INSERT INTO `ticket_evaluation` VALUES ('75', '', '', null, '1554193308');
INSERT INTO `ticket_evaluation` VALUES ('70', '1', '2', null, '1554194066');
INSERT INTO `ticket_evaluation` VALUES ('79', '1', '2', null, '1554194590');
INSERT INTO `ticket_evaluation` VALUES ('81', '1', '2', null, '1554259374');
INSERT INTO `ticket_evaluation` VALUES ('95', '1', '2', null, '1555992703');
INSERT INTO `ticket_evaluation` VALUES ('93', '1', '2', null, '1556071517');
INSERT INTO `ticket_evaluation` VALUES ('112', '1', '3', null, '1556086702');
INSERT INTO `ticket_evaluation` VALUES ('113', '1', '3', null, '1556087045');
INSERT INTO `ticket_evaluation` VALUES ('110', '1', '2', null, '1556087297');

-- ----------------------------
-- Table structure for ticket_files
-- ----------------------------
DROP TABLE IF EXISTS `ticket_files`;
CREATE TABLE `ticket_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `save_name` varchar(255) NOT NULL,
  `save_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ticket_files
-- ----------------------------
INSERT INTO `ticket_files` VALUES ('1', '知识库系统.txt', '5cbdbce7db05f.txt', '/Public/Uploads/2019-04-22/');
INSERT INTO `ticket_files` VALUES ('2', '工单系统优化与bug修复排期20190418.xlsx', '5cbdbe2ac011d.xlsx', '/Public/Uploads/2019-04-22/');
INSERT INTO `ticket_files` VALUES ('3', '未标题-1.jpg', '5cbdbe4cf05f4.jpg', '/Public/Uploads/2019-04-22/');
INSERT INTO `ticket_files` VALUES ('4', '工单系统.txt', '5cbeaea704a0d.txt', '/Public/Uploads/2019-04-23/');
INSERT INTO `ticket_files` VALUES ('5', '工单系统优化与bug修复排期20190418.xlsx', '5cbfc2bb8e054.xlsx', '/Public/Uploads/2019-04-24/');
INSERT INTO `ticket_files` VALUES ('6', 'folder.jpg', '5cbfc3001396b.jpg', '/Public/Uploads/2019-04-24/');
INSERT INTO `ticket_files` VALUES ('7', '微信图片_20190415194344.jpg', '5cbfc30014d59.jpg', '/Public/Uploads/2019-04-24/');
INSERT INTO `ticket_files` VALUES ('8', '海平合作项目20190419v3.rp', '5cbfc517b456e.rp', '/Public/Uploads/2019-04-24/');
INSERT INTO `ticket_files` VALUES ('9', '工单系统.txt', '5cbfd22054273.txt', '/Public/Uploads/2019-04-24/');
INSERT INTO `ticket_files` VALUES ('10', '工单系统.txt', '5cbfd234a0703.txt', '/Public/Uploads/2019-04-24/');
INSERT INTO `ticket_files` VALUES ('11', '工单系统体验.doc', '5cbfd234a1b42.doc', '/Public/Uploads/2019-04-24/');
INSERT INTO `ticket_files` VALUES ('12', 'folder.jpg', '5cbfd38d90726.jpg', '/Public/Uploads/2019-04-24/');
INSERT INTO `ticket_files` VALUES ('13', 'youdu_push_development.p12', '5cbfd3ed1113b.p12', '/Public/Uploads/2019-04-24/');
INSERT INTO `ticket_files` VALUES ('14', '微信图片_20190415194204.jpg', '5cbffd7c2a1dc.jpg', '/Public/Uploads/2019-04-24/');
INSERT INTO `ticket_files` VALUES ('15', 'f3160a099a62718ba6c5.jpg', '5cc003f61dbb3.jpg', '/Public/Uploads/2019-04-24/');

-- ----------------------------
-- Table structure for ticket_service
-- ----------------------------
DROP TABLE IF EXISTS `ticket_service`;
CREATE TABLE `ticket_service` (
  `id` tinyint(10) unsigned NOT NULL,
  `uname` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ticket_service
-- ----------------------------
INSERT INTO `ticket_service` VALUES ('57', 'agent1', '13726285582', 'agent1@example.com', '1553225189');
INSERT INTO `ticket_service` VALUES ('62', 'Agent2', '13726285582', 'agent@qq.com', '1553420459');

-- ----------------------------
-- Table structure for ticket_status
-- ----------------------------
DROP TABLE IF EXISTS `ticket_status`;
CREATE TABLE `ticket_status` (
  `id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('3','2','1') NOT NULL,
  `status` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ticket_status
-- ----------------------------
INSERT INTO `ticket_status` VALUES ('24', '2', '研发组', '1554019737');
INSERT INTO `ticket_status` VALUES ('15', '2', '运维组', '1553594220');
INSERT INTO `ticket_status` VALUES ('20', '3', '客服组', '1553595305');
INSERT INTO `ticket_status` VALUES ('23', '2', '测试组Test', '1553604489');
INSERT INTO `ticket_status` VALUES ('25', '3', '客户组', '1554019770');
INSERT INTO `ticket_status` VALUES ('27', '3', '客服1组', '1554697108');
INSERT INTO `ticket_status` VALUES ('28', '3', 'A', '1555404649');

-- ----------------------------
-- Table structure for ticket_time
-- ----------------------------
DROP TABLE IF EXISTS `ticket_time`;
CREATE TABLE `ticket_time` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `begin_time` varchar(250) NOT NULL,
  `end_time` varchar(250) NOT NULL,
  `begin_beputtime` varchar(250) NOT NULL,
  `end_beputtime` varchar(250) NOT NULL,
  `pubtime` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ticket_time
-- ----------------------------
INSERT INTO `ticket_time` VALUES ('4', '9:30', '18:00', '-28800', '-28800', '1553226550');

-- ----------------------------
-- Table structure for ticket_user
-- ----------------------------
DROP TABLE IF EXISTS `ticket_user`;
CREATE TABLE `ticket_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(250) NOT NULL,
  `pwd` varchar(250) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `qq` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `f_date` varchar(250) DEFAULT NULL,
  `zl_status` enum('1','-1') DEFAULT '-1',
  `u_status` varchar(250) DEFAULT NULL,
  `limits` enum('1','2','3') DEFAULT NULL,
  `sid` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ticket_user
-- ----------------------------
INSERT INTO `ticket_user` VALUES ('56', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'qq123', 'admin@example.com', '13726285582', 'url', '2019-03-22', '1', 'u_status', '1', '1');
INSERT INTO `ticket_user` VALUES ('57', 'agent1', 'e10adc3949ba59abbe56e057f20f883e', 'agent1', null, 'agent1@example.com', '13726285582', null, '1553225189', '1', '15', '2', null);
INSERT INTO `ticket_user` VALUES ('58', 'user1', 'e10adc3949ba59abbe56e057f20f883e', 'user1', '76701398', 'user1@example.com', '13726285582', 'user1URL', '1553225612', '1', '20', '3', '57');
INSERT INTO `ticket_user` VALUES ('59', 'user_1', '3f49044c1469c6990a665f46ec6c0a41', 'user_1', null, null, null, null, '1553226316', '-1', '20', '3', '57');
INSERT INTO `ticket_user` VALUES ('60', 'user2', 'e10adc3949ba59abbe56e057f20f883e', 'user2', '76701398', 'user2@example.com', '13726285582', 'ur2', '1553226708', '1', '20', '3', '57');
INSERT INTO `ticket_user` VALUES ('61', 'user3', 'e10adc3949ba59abbe56e057f20f883e', 'user3', '76701398', 'user3@example.com', '13726285582', 'url23', '1553226728', '1', '20', '3', '57');
INSERT INTO `ticket_user` VALUES ('62', 'agent2', 'e10adc3949ba59abbe56e057f20f883e', 'Agent2', null, 'agent@qq.com', '13726285582', null, '1553420459', '1', '15', '2', null);
INSERT INTO `ticket_user` VALUES ('63', 'agent3', '123456', 'Agent3', null, null, null, null, null, '1', '15', null, null);
INSERT INTO `ticket_user` VALUES ('65', 'user4', '123456', 'User4', null, null, null, null, null, '-1', '20', null, null);
INSERT INTO `ticket_user` VALUES ('70', 'toyto6', 'e10adc3949ba59abbe56e057f20f883e', 'toyTo6', null, null, null, null, '1553865253', '1', '15', '2', null);
INSERT INTO `ticket_user` VALUES ('71', 'yanfa1', 'e10adc3949ba59abbe56e057f20f883e', 'YF01', null, null, null, null, null, '-1', '24', '2', null);
INSERT INTO `ticket_user` VALUES ('72', 'yf2', 'e10adc3949ba59abbe56e057f20f883e', 'YF02', null, null, null, null, '1554020644', '-1', '24', '2', null);
INSERT INTO `ticket_user` VALUES ('73', 'yf3', 'e10adc3949ba59abbe56e057f20f883e', 'YF03', null, null, null, null, '1554020680', '-1', '24', '2', null);
INSERT INTO `ticket_user` VALUES ('74', 'yf4', 'e10adc3949ba59abbe56e057f20f883e', 'YF04', null, null, null, null, '1554021019', '-1', '24', '2', null);
INSERT INTO `ticket_user` VALUES ('75', 'yw1', 'e10adc3949ba59abbe56e057f20f883e', 'cs1', null, null, null, null, '1554021187', '1', '23', '2', null);
INSERT INTO `ticket_user` VALUES ('78', 'toy1', 'e10adc3949ba59abbe56e057f20f883e', 'Server 3.0.17 测试1号', null, null, null, null, '1554021660', '1', '20', '3', null);
INSERT INTO `ticket_user` VALUES ('79', 'toy2', 'e10adc3949ba59abbe56e057f20f883e', 'Server  3.0.17 测试2号', null, null, null, null, '1554021683', '1', '15', '2', null);
INSERT INTO `ticket_user` VALUES ('85', 'pencil.huang', 'e10adc3949ba59abbe56e057f20f883e', '黄智亮', null, null, null, null, '1554113299', '1', '24', '2', null);
INSERT INTO `ticket_user` VALUES ('81', 'vito.chen', '202cb962ac59075b964b07152d234b70', '陈群佳', null, null, null, null, '1554090393', '1', '24', '2', null);
INSERT INTO `ticket_user` VALUES ('82', 'adou.chen', '202cb962ac59075b964b07152d234b70', '陈瑶', null, null, null, null, '1554103565', '1', '20', '3', null);
INSERT INTO `ticket_user` VALUES ('83', 'add', '202cb962ac59075b964b07152d234b70', '艾德', null, null, null, null, '1554104350', '1', '24', '2', null);
INSERT INTO `ticket_user` VALUES ('84', 'toy3', 'e10adc3949ba59abbe56e057f20f883e', 'Toy3 测试', null, null, null, null, '1554106805', '1', '20', '3', null);
INSERT INTO `ticket_user` VALUES ('86', 'ad3', '25f9e794323b453885f5181f1b624d0b', 'ad3', null, null, null, null, '1554113346', '1', '24', '2', null);
INSERT INTO `ticket_user` VALUES ('89', 'toy5', 'e10adc3949ba59abbe56e057f20f883e', 'Toy5', null, null, null, null, '1554212666', '1', '24', '2', null);
INSERT INTO `ticket_user` VALUES ('90', 'lynn.li', 'e10adc3949ba59abbe56e057f20f883e', '李莹', null, null, null, null, '1554258125', '1', '20', '3', null);
INSERT INTO `ticket_user` VALUES ('91', 'aaaa', '74b87337454200d4d33f80c4663dc5e5', 'aaaa', null, null, null, null, '1554697129', '1', '27', '3', null);
INSERT INTO `ticket_user` VALUES ('92', 'bbbb', '65ba841e01d6db7733e90a5b7f9e6f80', 'bbbb', null, null, null, null, '1554697143', '-1', '27', '3', null);
INSERT INTO `ticket_user` VALUES ('93', 'hunter1', '726ad07bc398372b56a52e3de8693679', '', null, null, null, null, '1554697259', '1', '27', '3', null);
INSERT INTO `ticket_user` VALUES ('95', 'kf1', 'e10adc3949ba59abbe56e057f20f883e', 'CS2', null, null, null, null, '1555640419', '1', '20', '3', null);
INSERT INTO `ticket_user` VALUES ('96', 'yf05', 'e10adc3949ba59abbe56e057f20f883e', 'YF05', null, null, null, null, '1556089263', '-1', '24', '2', null);
INSERT INTO `ticket_user` VALUES ('97', 'cs3', 'e10adc3949ba59abbe56e057f20f883e', 'zz测 试03', null, null, null, null, '1556089305', '-1', '24', '2', null);
INSERT INTO `ticket_user` VALUES ('98', 'cs4', 'e10adc3949ba59abbe56e057f20f883e', 'cs4', null, null, null, null, '1556089532', '1', '23', '2', null);
INSERT INTO `ticket_user` VALUES ('99', 'cs5', 'e10adc3949ba59abbe56e057f20f883e', 'cs5', null, null, null, null, '1556089577', '-1', '23', '2', null);

-- ----------------------------
-- Table structure for ticket_work
-- ----------------------------
DROP TABLE IF EXISTS `ticket_work`;
CREATE TABLE `ticket_work` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `issue` text NOT NULL,
  `sc_file` varchar(255) NOT NULL,
  `puddate` varchar(250) NOT NULL,
  `accdate` varchar(250) DEFAULT NULL,
  `cc_status` enum('-1','1') NOT NULL,
  `tz_status` enum('-1','1') NOT NULL,
  `wc_sataus` enum('2','1','-1','4','3') NOT NULL,
  `ea_status` enum('1','-1') DEFAULT '-1',
  `work_type` int(11) NOT NULL,
  `work_level` int(11) NOT NULL,
  `work_owned` int(11) NOT NULL,
  `work_product` int(11) DEFAULT NULL,
  `work_develop` int(11) DEFAULT NULL,
  `work_finish` varchar(250) DEFAULT NULL,
  `uid` int(250) NOT NULL,
  `did` int(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ticket_work
-- ----------------------------
INSERT INTO `ticket_work` VALUES ('80', 'TestTestTestTestTestTestTestTest', '<p>12313215554142313214561321132</p>', '', '1554254191', null, '-1', '1', '1', '-1', '1', '1', '1', null, null, null, '78', '83');
INSERT INTO `ticket_work` VALUES ('81', 'tivket', '<p>asdasdasdasd</p>', '', '1554258258', null, '-1', '-1', '3', '-1', '1', '1', '1', null, null, null, '90', '83');
INSERT INTO `ticket_work` VALUES ('82', 'new', '<p>fjjsl<br/></p>', '', '1554259437', null, '-1', '1', '4', '-1', '1', '1', '1', null, null, null, '90', '79');
INSERT INTO `ticket_work` VALUES ('83', 'toy1 test ticket', '<p>Toy Test Tcssss</p>', '', '1554259678', '1554271808', '-1', '-1', '4', '-1', '1', '1', '1', null, null, null, '78', '89');
INSERT INTO `ticket_work` VALUES ('84', 'toy1 Test Ticket3333', '<p>toy1 Test Ticket2asdasdasd</p>', '', '1554260458', '1554271912', '-1', '-1', '2', '-1', '1', '1', '1', null, null, null, '78', '89');
INSERT INTO `ticket_work` VALUES ('85', '好的', '<p>你好</p>', '', '1554263814', null, '-1', '1', '1', '-1', '1', '1', '1', null, '1', null, '82', null);
INSERT INTO `ticket_work` VALUES ('86', 'TesssAXCF', '<p>asdAAS</p>', '', '1554273955', null, '-1', '1', '1', '-1', '1', '1', '1', '1', '1', null, '78', null);
INSERT INTO `ticket_work` VALUES ('87', 'windows客户端cef显示慢', '<p>windows客户端cef显示慢，看起来是cef检查代理引起。</p>', '', '1554697389', null, '-1', '-1', '1', '-1', '1', '1', '1', null, null, null, '93', '75');
INSERT INTO `ticket_work` VALUES ('88', ' CEF解决加载慢问题', '<p><span style=\"color: rgb(79, 79, 79); font-family: &quot;Microsoft YaHei&quot;, &quot;SF Pro Display&quot;, Roboto, Noto, Arial, &quot;PingFang SC&quot;, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">CEF加载慢的时候，加上以下代码，通过命令行的方式:<br/></span></p><pre style=\"box-sizing: border-box; outline-style: initial; outline-width: 0px; margin-bottom: 24px; padding: 8px; position: relative; font-family: Consolas, Inconsolata, Courier, monospace; overflow-x: auto; font-size: 14px; line-height: 22px; color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">CefRefPtr&lt;CefCommandLine&gt; command_line;\r\ncommand_line = CefCommandLine::CreateCommandLine();\r\ncommand_line-&gt;AppendSwitch(&quot;no-proxy-server&quot;);//加载慢，关闭代理试试</pre><p><span style=\"color: rgb(79, 79, 79); font-family: &quot;Microsoft YaHei&quot;, &quot;SF Pro Display&quot;, Roboto, Noto, Arial, &quot;PingFang SC&quot;, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\"></span><br/></p>', '', '1554699090', '1554703872', '-1', '-1', '2', '-1', '1', '1', '1', null, null, null, '78', '75');
INSERT INTO `ticket_work` VALUES ('89', '12', '', '', '1555400337', null, '-1', '-1', '1', '-1', '1', '1', '1', null, null, null, '82', '74');
INSERT INTO `ticket_work` VALUES ('90', 'MARVEL END GAME', '4.28真是令人期待', '', '1555641472', '1555987025', '-1', '1', '2', '-1', '1', '1', '1', '1', null, null, '95', '75');
INSERT INTO `ticket_work` VALUES ('91', 'CESAFFFAS', 'SSDOTA SSSDRQA', '', '1555642046', null, '-1', '-1', '1', '-1', '1', '1', '2', '1', '2', null, '95', null);
INSERT INTO `ticket_work` VALUES ('92', '这个是有工单类型和优先级的工单', 'V1.3 工单', '', '1555646859', null, '-1', '-1', '1', '-1', '2', '2', '1', '2', '1', null, '95', null);
INSERT INTO `ticket_work` VALUES ('93', '增加工单类型', '需要在提交工单的时候加上工单类型选择', '', '1555646905', null, '-1', '-1', '3', '-1', '2', '3', '2', null, null, null, '95', '83');
INSERT INTO `ticket_work` VALUES ('94', 'Test File', '上传一个附件试一下', '', '1555657371', null, '-1', '1', '1', '-1', '1', '1', '1', '1', '1', '1562774400', '95', null);
INSERT INTO `ticket_work` VALUES ('95', 'upload excel file', 'upload excel file Test Test', '', '1555659670', null, '-1', '-1', '3', '-1', '3', '2', '2', null, null, null, '95', '79');
INSERT INTO `ticket_work` VALUES ('96', 'upload file 1645', '16:45', '', '1555663567', null, '-1', '-1', '1', '-1', '1', '1', '1', '1', '1', '1556380800', '95', '75');
INSERT INTO `ticket_work` VALUES ('97', 'upload file 1646', '16:46', '', '1555663602', null, '-1', '-1', '1', '-1', '1', '1', '1', null, null, null, '95', '79');
INSERT INTO `ticket_work` VALUES ('98', 'upload file 1650', 'AAADRRRA', '', '1555663834', null, '-1', '-1', '1', '-1', '1', '1', '1', null, null, null, '95', '83');
INSERT INTO `ticket_work` VALUES ('99', 'upload file', 'aaaaaaaaaa', '', '1555668041', null, '-1', '-1', '1', '-1', '1', '1', '1', '1', '1', '1554912000', '95', '75');
INSERT INTO `ticket_work` VALUES ('100', 'upload file', 'bbbbbbb', '', '1555668079', null, '-1', '-1', '1', '-1', '1', '1', '1', '1', '1', null, '95', '75');
INSERT INTO `ticket_work` VALUES ('101', 'BBFAS', 'CCAR', '', '1555899672', null, '-1', '-1', '1', '-1', '1', '3', '2', '1', '1', '1555948800', '95', '75');
INSERT INTO `ticket_work` VALUES ('102', 'AAABBBB', 'AAABBBB', '', '1555924406', null, '-1', '-1', '1', '-1', '1', '3', '1', null, null, null, '95', '83');
INSERT INTO `ticket_work` VALUES ('103', 'asdasdasdasduiasduiasd', 'zxcnbuasbudj', '1', '1555938535', null, '-1', '-1', '1', '-1', '1', '3', '2', '1', '1', '1556640000', '95', '75');
INSERT INTO `ticket_work` VALUES ('104', 'cnainaAAA', 'NBONAONSD', '2', '1555938858', null, '-1', '-1', '1', '-1', '1', '3', '1', '2', '2', '1555516800', '95', '75');
INSERT INTO `ticket_work` VALUES ('105', 'czxcaAABBBBCCCC', 'asdasdasd', '3', '1555938892', null, '-1', '1', '1', '-1', '1', '3', '2', '1', '1', '1554825600', '95', '75');
INSERT INTO `ticket_work` VALUES ('106', 'AAADDD', 'AAdddd', '4', '1556000423', null, '-1', '-1', '1', '-1', '1', '3', '1', '1', '2', '1555987025', '95', '75');
INSERT INTO `ticket_work` VALUES ('107', 'AAAABBBBB', 'adsddd', '5', '1556071099', null, '-1', '-1', '1', '-1', '1', '3', '1', null, null, null, '95', '75');
INSERT INTO `ticket_work` VALUES ('108', 'BBBBCCC', 'AASCCC', '6,7', '1556071168', null, '-1', '-1', '1', '-1', '1', '3', '1', null, null, null, '95', '85');
INSERT INTO `ticket_work` VALUES ('109', 'BBVVVVV', 'AAACCCVVVVVV', '8', '1556071703', '1556087343', '-1', '-1', '4', '-1', '1', '3', '1', '1', '1', null, '95', '75');
INSERT INTO `ticket_work` VALUES ('110', 'CCAASAD', 'NMIKS', '9', '1556075040', '1556087277', '-1', '-1', '3', '-1', '1', '3', '1', '1', '1', null, '95', '75');
INSERT INTO `ticket_work` VALUES ('111', 'CCZCASD', 'ADASSDDD', '10,11', '1556075060', null, '-1', '-1', '1', '-1', '1', '3', '1', '1', '2', '1555603200', '95', '75');
INSERT INTO `ticket_work` VALUES ('112', 'CCAA', 'DDDSA', '12', '1556075405', '1556086686', '-1', '1', '3', '-1', '1', '3', '1', null, null, null, '95', '75');
INSERT INTO `ticket_work` VALUES ('113', 'NMIKS', 'NIKS', '13', '1556075501', '1556087024', '-1', '-1', '3', '-1', '1', '3', '1', null, null, null, '95', '75');
INSERT INTO `ticket_work` VALUES ('114', '运维创建工单测试', '这是客户C的一个需求', '14', '1556086140', '1556102562', '-1', '1', '4', '-1', '2', '2', '3', '1', '1', null, '75', '75');
INSERT INTO `ticket_work` VALUES ('115', 'FFAA', 'CCCDAZ', '15', '1556087798', null, '-1', '-1', '1', '-1', '3', '3', '1', null, null, null, '95', '75');
INSERT INTO `ticket_work` VALUES ('116', 'DDAASS', 'ZVXVASDD', '', '1556087973', null, '-1', '1', '1', '-1', '1', '3', '1', '1', '1', '1556121600', '95', '75');

-- ----------------------------
-- Table structure for ticket_wrecord
-- ----------------------------
DROP TABLE IF EXISTS `ticket_wrecord`;
CREATE TABLE `ticket_wrecord` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `time` bigint(20) NOT NULL,
  `event` text,
  `point_word` text,
  PRIMARY KEY (`id`),
  KEY `wid` (`wid`)
) ENGINE=MyISAM AUTO_INCREMENT=324 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ticket_wrecord
-- ----------------------------
INSERT INTO `ticket_wrecord` VALUES ('1', '64', '58', '1553739354', '创建工单【Test Create Ticket Add Record】', '');
INSERT INTO `ticket_wrecord` VALUES ('2', '64', '57', '1553755053', '修改了工单状态【受理人：Agent2】【工单状态：受理中】', '');
INSERT INTO `ticket_wrecord` VALUES ('3', '64', '57', '1553755063', '修改了工单状态【受理人：Agent2】【工单状态：待处理】', '');
INSERT INTO `ticket_wrecord` VALUES ('4', '64', '57', '1553756022', '修改了工单状态【受理人：Agent3】【工单状态：待处理】', '');
INSERT INTO `ticket_wrecord` VALUES ('5', '64', '57', '1553756059', '修改了工单状态【受理人：Agent2】【工单状态：待处理】', '');
INSERT INTO `ticket_wrecord` VALUES ('6', '64', '57', '1553756059', '评论了工单：<p>set the ticket to Agent2</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('7', '64', '58', '1553756656', '评论了工单：<p>User1 send Text&nbsp;</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('8', '63', '58', '1553825540', '评论了工单：<p>Teee</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('9', '63', '57', '1553825594', '评论了工单：<p>tetete</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('10', '33', '57', '1553825779', '修改了工单状态【受理人：agent1】【工单状态：待评价】', '');
INSERT INTO `ticket_wrecord` VALUES ('11', '57', '57', '1553825808', '修改了工单状态【受理人：agent1】【工单状态：待评价】', '');
INSERT INTO `ticket_wrecord` VALUES ('12', '48', '57', '1553825827', '修改了工单状态【受理人：agent1】【工单状态：待评价】', '');
INSERT INTO `ticket_wrecord` VALUES ('13', '57', '58', '1553827873', '评论了工单：<p>tetete</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('14', '57', '58', '1553827881', '评论了工单：<p>NAZIONAOSDOAKSLKZXCASD</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('15', '57', '58', '1553827930', '评价了工单：【问题是否已经解决:是；服务评价：满意。', '');
INSERT INTO `ticket_wrecord` VALUES ('16', '57', '58', '1553827930', '工单已关闭', '');
INSERT INTO `ticket_wrecord` VALUES ('17', '65', '60', '1553840949', '创建工单【User2 Create Ticket  2019-03-29】', '');
INSERT INTO `ticket_wrecord` VALUES ('18', '65', '57', '1553841021', '修改了工单状态【受理人：Agent2】【工单状态：受理中】', '');
INSERT INTO `ticket_wrecord` VALUES ('19', '65', '62', '1553841057', '评论了工单：<p>ZZXDDDAAAA<br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('20', '65', '60', '1553841080', '评论了工单：<p>TEQACASAS</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('21', '65', '62', '1553841096', '评论了工单：<p>ASCZXCAA<br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('22', '65', '60', '1553841105', '评论了工单：<p>ZCZXCAAQQ</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('23', '65', '62', '1553841117', '评论了工单：<p>CXZXCAASSAD<br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('24', '65', '60', '1553841128', '评价了工单：【问题是否已经解决:是；服务评价：满意】。', '');
INSERT INTO `ticket_wrecord` VALUES ('25', '65', '60', '1553841128', '工单已关闭', '');
INSERT INTO `ticket_wrecord` VALUES ('26', '64', '58', '1553841429', '评价了工单：【问题是否已经解决:是；服务评价：非常满意】。', '');
INSERT INTO `ticket_wrecord` VALUES ('27', '64', '58', '1553841430', '工单已关闭', '');
INSERT INTO `ticket_wrecord` VALUES ('28', '66', '58', '1553841885', '创建工单【Test Ticket Agent2 Reply】。', '');
INSERT INTO `ticket_wrecord` VALUES ('29', '66', '62', '1553841903', '修改了工单状态【受理人：Agent2】【工单状态：受理中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('30', '66', '62', '1553841996', '评论了工单：<p>Testt<br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('31', '66', '62', '1553842426', '评论了工单：<p>TTTEE<br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('32', '66', '58', '1553842451', '评论了工单：<p>eeete</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('33', '66', '62', '1553842471', '评论了工单：<p>AAAABBBBBCCCCCC<br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('34', '67', '78', '1554021741', '创建工单【Toy 1 Test Ticket】。', '');
INSERT INTO `ticket_wrecord` VALUES ('35', '68', '78', '1554021927', '创建工单【Toy 1 Test Ticket 22222】。', '');
INSERT INTO `ticket_wrecord` VALUES ('36', '69', '78', '1554021937', '创建工单【Toy 1 Test Ticket 3333333】。', '');
INSERT INTO `ticket_wrecord` VALUES ('37', '68', '79', '1554021968', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：受理中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('38', '68', '79', '1554021977', '评论了工单：<p>TTNDA</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('39', '69', '79', '1554022019', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('40', '69', '79', '1554022019', '评论了工单：<p>asdasdddddd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('41', '69', '78', '1554022068', '评价了工单：【问题是否已经解决:是；服务评价：满意】。', '');
INSERT INTO `ticket_wrecord` VALUES ('42', '69', '78', '1554022069', '已关闭工单。', '');
INSERT INTO `ticket_wrecord` VALUES ('43', '70', '78', '1554096719', '创建工单【toy1 test ticket 】。', '');
INSERT INTO `ticket_wrecord` VALUES ('44', '70', '79', '1554100007', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：受理中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('45', '70', '79', '1554100014', '评论了工单：<p>TeTeTe</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('46', '67', '79', '1554100030', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('47', '67', '79', '1554100030', '评论了工单：<p>AAAS</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('48', '71', '82', '1554104653', '创建工单【解决问题】。', '');
INSERT INTO `ticket_wrecord` VALUES ('49', '71', '83', '1554104815', '评论了工单：<p>点击提交工单<br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('50', '71', '82', '1554104848', '评论了工单：<p>邓家佳</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('51', '72', '82', '1554105012', '创建工单【体验问题】。', '');
INSERT INTO `ticket_wrecord` VALUES ('52', '72', '82', '1554105302', '评论了工单：<p>123</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('53', '73', '82', '1554105383', '创建工单【可以可以】。', '');
INSERT INTO `ticket_wrecord` VALUES ('54', '73', '83', '1554105527', '评论了工单：<p>adouk<br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('55', '73', '83', '1554105542', '修改了工单状态【受理人：艾德】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('56', '61', '83', '1554105597', '评论了工单：<p>111<br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('57', '61', '83', '1554105602', '修改了工单状态【受理人： -- 】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('58', '74', '82', '1554105652', '创建工单【试试待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('59', '74', '83', '1554105665', '评论了工单：<p>你好你好<br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('60', '74', '82', '1554105683', '评论了工单：<p>红啊好后</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('61', '74', '83', '1554105699', '评论了工单：<p>xingxing<br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('62', '74', '82', '1554105717', '评论了工单：<p>ok&nbsp;你服务得很好&nbsp;五颗星给你</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('63', '74', '83', '1554105727', '修改了工单状态【受理人： -- 】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('64', '74', '82', '1554105795', '评价了工单：【问题是否已经解决:是；服务评价：非常满意】。', '');
INSERT INTO `ticket_wrecord` VALUES ('65', '74', '82', '1554105796', '已关闭工单。', '');
INSERT INTO `ticket_wrecord` VALUES ('66', '72', '56', '1554113518', '修改了工单状态【受理人：陈群佳】【工单状态：受理中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('67', '72', '56', '1554113518', '评论了工单：<p>admin TT</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('68', '71', '56', '1554113716', '修改了工单状态【受理人：陈群佳】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('69', '63', '56', '1554113853', '修改了工单状态【受理人：陈群佳】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('70', '63', '56', '1554113853', '评论了工单：<p>123</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('71', '62', '56', '1554113980', '修改了工单状态【受理人：黄智亮】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('72', '75', '78', '1554115280', '创建工单【Tete】。', '');
INSERT INTO `ticket_wrecord` VALUES ('73', '75', '78', '1554115976', '评论了工单：<p>asdnkkzxc</p><p>nzkxnclkasd</p><p>nzxcknasd</p><p>njkzxckas;kd</p><p><br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('74', '75', '79', '1554116059', '评论了工单：<p>nzxjcn</p><p>zxncjnasdheoiqw</p><p>mzkxncklasd</p><p>nzxnvclkasd&#39;<br/><br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('75', '70', '79', '1554169898', '评论了工单：<p><br/><sup>sdasd</sup></p><p><sup>zxcnikasd</sup></p><p><sup>xzcaaa</sup></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('76', '61', '79', '1554174503', '评论了工单：<p>123</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('77', '61', '79', '1554174519', '评论了工单：<p>22</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('78', '61', '79', '1554175270', '评论了工单：<p>11</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('79', '61', '79', '1554175270', '工单受理中，', '');
INSERT INTO `ticket_wrecord` VALUES ('80', '61', '79', '1554175322', '修改了工单状态【受理人： -- 】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('81', '61', '79', '1554175322', '评论了工单：<p>qq</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('82', '61', '79', '1554175322', '工单受理中，', '');
INSERT INTO `ticket_wrecord` VALUES ('83', '61', '79', '1554175342', '修改了工单状态【受理人： -- 】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('84', '61', '79', '1554175362', '评论了工单：<p>ww</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('85', '61', '79', '1554175362', '工单受理中，', '');
INSERT INTO `ticket_wrecord` VALUES ('86', '61', '79', '1554175374', '修改了工单状态【受理人： -- 】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('87', '61', '79', '1554175418', '修改了工单状态【受理人：toyTo6】【工单状态：受理中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('88', '61', '79', '1554175418', '评论了工单：<p>11</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('89', '61', '79', '1554175418', '工单受理中，', '');
INSERT INTO `ticket_wrecord` VALUES ('90', '61', '79', '1554175424', '修改了工单状态【受理人：toyTo6】【工单状态：受理中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('91', '61', '79', '1554175432', '评论了工单：<p>11</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('92', '61', '79', '1554175442', '修改了工单状态【受理人： -- 】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('93', '56', '79', '1554175457', '评论了工单：<p>11</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('94', '56', '79', '1554175457', '工单受理中，', '');
INSERT INTO `ticket_wrecord` VALUES ('95', '56', '79', '1554175611', '修改了工单状态【受理人： -- 】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('96', '56', '79', '1554175618', '评论了工单：<p>22</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('97', '56', '79', '1554175620', '工单受理中，', '');
INSERT INTO `ticket_wrecord` VALUES ('98', '56', '79', '1554175921', '修改了工单状态【受理人： -- 】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('99', '56', '79', '1554175927', '修改了工单状态【受理人： -- 】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('100', '56', '79', '1554175927', '评论了工单：<p>33</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('101', '56', '79', '1554175963', '修改了工单状态【受理人： -- 】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('102', '56', '79', '1554175977', '评论了工单：<p>44</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('103', '56', '79', '1554176005', '修改了工单状态【受理人： -- 】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('104', '56', '79', '1554176010', '评论了工单：<p>55</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('105', '56', '79', '1554176011', '工单受理中，', '');
INSERT INTO `ticket_wrecord` VALUES ('106', '56', '79', '1554176077', '修改了工单状态【受理人： -- 】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('107', '56', '79', '1554176082', '评论了工单：<p>66</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('108', '56', '79', '1554176083', '成为了受理人，工单受理中。', '');
INSERT INTO `ticket_wrecord` VALUES ('109', '56', '79', '1554176095', '修改了工单状态【受理人：toyTo6】【工单状态：受理中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('110', '56', '79', '1554176105', '评论了工单：<p>112</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('111', '56', '79', '1554176121', '评论了工单：<p>asddd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('112', '56', '79', '1554176129', '修改了工单状态【受理人：toyTo6】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('113', '56', '79', '1554176133', '评论了工单：<p>12333</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('114', '55', '79', '1554176150', '评论了工单：<p>aaazz</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('115', '55', '79', '1554176151', '成为了受理人，工单受理中。', '');
INSERT INTO `ticket_wrecord` VALUES ('116', '55', '79', '1554176166', '修改了工单状态【受理人： -- 】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('117', '55', '79', '1554176170', '评论了工单：<p>ssszz</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('118', '55', '79', '1554176171', '成为了受理人，工单受理中。', '');
INSERT INTO `ticket_wrecord` VALUES ('119', '55', '79', '1554176176', '修改了工单状态【受理人：agent1】【工单状态：受理中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('120', '55', '79', '1554176180', '评论了工单：<p>ssssa</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('121', '67', '78', '1554187393', '评论了工单：<p>ASD</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('122', '67', '78', '1554187414', '评论了工单：<p>11233</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('123', '70', '78', '1554188253', '评论了工单：<p>123123123</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('124', '70', '78', '1554188383', '评论了工单：<p>222</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('125', '70', '78', '1554189063', '评论了工单：<p>1123</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('126', '70', '78', '1554189067', '评论了工单：<p>zxczxczxc</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('127', '67', '78', '1554189121', '评论了工单：<p>zxczxcsad</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('128', '75', '78', '1554189132', '评论了工单：<p>asdasd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('129', '75', '78', '1554189136', '评论了工单：<p>qweqwe</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('130', '75', '79', '1554189547', '评论了工单：<p>123123123</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('131', '75', '79', '1554189616', '评论了工单：<p>xxxxxxx</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('132', '75', '79', '1554189713', '评论了工单：<p>cccccccccccc</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('133', '68', '79', '1554189727', '评论了工单：<p>xxxxxxxxxxxxxxxx</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('134', '68', '79', '1554189735', '评论了工单：<p>qweqweqwe</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('135', '67', '79', '1554189743', '评论了工单：<p>vzxvzxv</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('136', '70', '79', '1554189757', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('137', '51', '56', '1554190205', '评论了工单：<p>asadasdasd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('138', '54', '56', '1554190218', '评论了工单：<p>sssss</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('139', '52', '56', '1554190269', '评论了工单：<p>asdasd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('140', '53', '56', '1554190278', '修改了工单状态【受理人：黄智亮】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('141', '53', '56', '1554190278', '评论了工单：<p>aaaa</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('142', '67', '78', '1554191061', '评论了工单：<p>asdasdasd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('143', '67', '78', '1554191064', '评论了工单：<p>zxczxcasd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('144', '67', '78', '1554191069', '评论了工单：<p>asdzxcasd</p><p>asdasdasd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('145', '67', '78', '1554191072', '评论了工单：<p>zxczxcasd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('146', '67', '78', '1554191075', '评论了工单：<p>asdasdasd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('147', '67', '78', '1554191079', '评论了工单：<p>asdasdasd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('148', '67', '78', '1554191721', '评价了工单：【问题是否已经解决:是；服务评价：一般】。', '');
INSERT INTO `ticket_wrecord` VALUES ('149', '67', '78', '1554191722', '已关闭工单。', '');
INSERT INTO `ticket_wrecord` VALUES ('150', '75', '79', '1554191953', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('151', '75', '78', '1554193308', '评价了工单：【问题是否已经解决:；服务评价：】。', '');
INSERT INTO `ticket_wrecord` VALUES ('152', '75', '78', '1554193309', '已关闭工单。', '');
INSERT INTO `ticket_wrecord` VALUES ('153', '70', '78', '1554194066', '评价了工单：【问题是否已经解决:是；服务评价：满意】。', '');
INSERT INTO `ticket_wrecord` VALUES ('154', '70', '78', '1554194067', '已关闭工单。', '');
INSERT INTO `ticket_wrecord` VALUES ('155', '54', '79', '1554194123', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('156', '54', '79', '1554194123', '评论了工单：<p>123123123</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('157', '54', '79', '1554194124', '成为了受理人，工单受理中。', '');
INSERT INTO `ticket_wrecord` VALUES ('158', '51', '79', '1554194146', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('159', '51', '79', '1554194146', '评论了工单：<p>zxczxczcx</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('160', '51', '79', '1554194147', '成为了受理人，工单受理中。', '');
INSERT INTO `ticket_wrecord` VALUES ('161', '52', '79', '1554194163', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('162', '52', '79', '1554194163', '评论了工单：<p>xczxczxc</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('163', '52', '79', '1554194164', '成为了受理人，工单受理中。', '');
INSERT INTO `ticket_wrecord` VALUES ('164', '52', '79', '1554194171', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('165', '37', '79', '1554194215', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('166', '37', '79', '1554194219', '评论了工单：<p>asdasdasd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('167', '36', '79', '1554194236', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('168', '36', '79', '1554194236', '评论了工单：<p>asdasdasd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('169', '36', '79', '1554194237', '成为了受理人，工单受理中。', '');
INSERT INTO `ticket_wrecord` VALUES ('170', '35', '79', '1554194287', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('171', '35', '79', '1554194287', '评论了工单：<p>ssdfsdfsdfsdf</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('172', '54', '79', '1554194307', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('173', '51', '79', '1554194314', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('174', '51', '79', '1554194314', '评论了工单：<p>zxczxczxczxc</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('175', '76', '78', '1554194358', '创建工单【toy1 test ticket 】。', '');
INSERT INTO `ticket_wrecord` VALUES ('176', '77', '78', '1554194363', '创建工单【toy1 test ticket】。', '');
INSERT INTO `ticket_wrecord` VALUES ('177', '78', '78', '1554194368', '创建工单【toy1 test ticket】。', '');
INSERT INTO `ticket_wrecord` VALUES ('178', '79', '78', '1554194373', '创建工单【toy1 test ticket】。', '');
INSERT INTO `ticket_wrecord` VALUES ('179', '79', '79', '1554194385', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('180', '79', '79', '1554194385', '评论了工单：<p>asdasdasd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('181', '78', '79', '1554194393', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('182', '78', '79', '1554194393', '评论了工单：<p>zxczxcasdasd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('183', '76', '79', '1554194407', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('184', '76', '79', '1554194407', '评论了工单：<p>asdaszxcsdgsdfsdfsdf</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('185', '77', '79', '1554194417', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('186', '77', '79', '1554194417', '评论了工单：<p>xcbsdfbghsdfgsdfsvd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('187', '79', '78', '1554194590', '评价了工单：【问题是否已经解决:是；服务评价：满意】。', '');
INSERT INTO `ticket_wrecord` VALUES ('188', '79', '78', '1554194591', '已关闭工单。', '');
INSERT INTO `ticket_wrecord` VALUES ('189', '47', '83', '1554202215', '评论了工单：<p>好的好的</p><p>可以</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('190', '47', '83', '1554202216', '成为了受理人，工单受理中。', '');
INSERT INTO `ticket_wrecord` VALUES ('191', '47', '83', '1554202264', '评论了工单：<p>ok</p><p><br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('192', '80', '78', '1554254191', '创建工单【TestTestTestTestTestTestTestTest】。', '');
INSERT INTO `ticket_wrecord` VALUES ('193', '80', '83', '1554255480', '评论了工单：<p>您好</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('194', '80', '83', '1554255481', '成为了受理人，工单受理中。', '');
INSERT INTO `ticket_wrecord` VALUES ('195', '81', '90', '1554258258', '创建工单【tivket】。', '');
INSERT INTO `ticket_wrecord` VALUES ('196', '81', '79', '1554258278', '评论了工单：<p>qweqwe<br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('197', '81', '79', '1554258279', '成为了受理人。', '');
INSERT INTO `ticket_wrecord` VALUES ('198', '81', '90', '1554259152', '评论了工单：<p>an</p><p><br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('199', '81', '90', '1554259374', '评价了工单：【问题是否已经解决:是；服务评价：满意】。', '');
INSERT INTO `ticket_wrecord` VALUES ('200', '81', '90', '1554259375', '已关闭工单。', '');
INSERT INTO `ticket_wrecord` VALUES ('201', '82', '90', '1554259437', '创建工单【new】。', '');
INSERT INTO `ticket_wrecord` VALUES ('202', '82', '79', '1554259473', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：受理中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('203', '82', '79', '1554259473', '评论了工单：<p>dfas</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('204', '82', '79', '1554259515', '评论了工单：<p>fd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('205', '83', '78', '1554259678', '创建工单【toy1 test ticket】。', '');
INSERT INTO `ticket_wrecord` VALUES ('206', '82', '79', '1554259964', '修改了工单状态【受理人：Server  3.0.17 测试2号】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('207', '83', '89', '1554260335', '评论了工单：<p>12312311</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('208', '83', '89', '1554260336', '成为了受理人。', '');
INSERT INTO `ticket_wrecord` VALUES ('209', '83', '89', '1554260423', '评论了工单：<p>asdddd</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('210', '83', '89', '1554260424', '成为了受理人。', '');
INSERT INTO `ticket_wrecord` VALUES ('211', '84', '78', '1554260458', '创建工单【toy1 Test Ticket3333】。', '');
INSERT INTO `ticket_wrecord` VALUES ('212', '84', '89', '1554260475', '修改了工单状态【受理人：Toy5】【工单状态：受理中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('213', '82', '79', '1554260672', '评论了工单：<p>11</p><p><br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('214', '80', '83', '1554263412', '评论了工单：<p>123</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('215', '85', '82', '1554263814', '创建工单【好的】。', '');
INSERT INTO `ticket_wrecord` VALUES ('216', '85', '82', '1554263830', '评论了工单：<p>能不能看看</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('217', '83', '89', '1554271808', '修改了工单状态【受理人：Toy5】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('218', '84', '89', '1554271901', '修改了工单状态【受理人：Toy5】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('219', '84', '89', '1554271912', '修改了工单状态【受理人：Toy5】【工单状态：受理中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('220', '84', '89', '1554271921', '评论了工单：<p>qweqwe</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('221', '84', '89', '1554271935', '评论了工单：<p>asdsad</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('222', '84', '89', '1554273749', '评论了工单：<p>qqq</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('223', '86', '78', '1554273955', '创建工单【TesssAXCF】。', '');
INSERT INTO `ticket_wrecord` VALUES ('224', '84', '78', '1554274001', '评论了工单：<p>ssaAA</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('225', '86', '56', '1554274107', '评论了工单：<p>ssss</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('226', '83', '78', '1554274507', '评论了工单：<p>xxaxxxx</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('227', '87', '93', '1554697389', '创建工单【windows客户端cef显示慢】。', '');
INSERT INTO `ticket_wrecord` VALUES ('228', '88', '78', '1554699090', '创建工单【 CEF解决加载慢问题】。', '');
INSERT INTO `ticket_wrecord` VALUES ('229', '87', '93', '1554699188', '评论了工单：<p style=\"box-sizing: border-box; outline: 0px; margin: 0px 0px 16px; padding: 0px; font-family: &#39;Microsoft YaHei&#39;, &#39;SF Pro Display&#39;, Roboto, Noto, Arial, &#39;PingFang SC&#39;, sans-serif; font-size: 16px; color: rgb(79, 79, 79); font-weight: normal; line-height: 26px; overflow-x: auto; word-wrap: break-word; font-style: normal; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\">用户自己通过这个方法（https://blog.csdn.net/wishfly/article/details/82910120）解决了。</p><pre style=\"box-sizing: border-box; outline: 0px; margin: 0px 0px 24px; padding: 8px; position: relative; font-family: Consolas, Inconsolata, Courier, monospace; white-space: pre-wrap; word-wrap: break-word; overflow-x: auto; font-size: 14px; line-height: 22px; color: rgb(0, 0, 0); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\"><p></p></pre><p><br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('230', '88', '78', '1554699204', '评论了工单：<pre style=\"padding: 8px; font-family: Consolas, Inconsolata, Courier, monospace; font-size: 14px; color: rgb(0, 0, 0); margin-bottom: 24px; line-height: 22px; background-color: rgb(255, 255, 255); outline-style: initial; outline-width: 0px; box-sizing: border-box; position: relative; overflow-x: auto;\">CefRefPtr&lt;CefCommandLine&gt; command_line;\r\ncommand_line = CefCommandLine::CreateCommandLine();\r\ncommand_line-&gt;AppendSwitch(&quot;no-proxy-server&quot;);//加载慢，关闭代理试试</pre><p><br/></p>', '');
INSERT INTO `ticket_wrecord` VALUES ('231', '88', '56', '1554703269', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('232', '88', '75', '1554703872', '修改了工单状态【受理人：cs1】【工单状态：受理中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('233', '87', '56', '1554710770', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('234', '89', '82', '1555400337', '创建工单【12】。', '');
INSERT INTO `ticket_wrecord` VALUES ('235', '89', '56', '1555403798', '修改了工单状态【受理人：YF04】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('236', '85', '56', '1555404185', '评论了工单：<p>时间快捷</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('237', '85', '56', '1555404192', '评论了工单：<p>123</p>', '');
INSERT INTO `ticket_wrecord` VALUES ('238', '90', '95', '1555641472', '创建工单【MARVEL END GAME】。', '');
INSERT INTO `ticket_wrecord` VALUES ('239', '91', '95', '1555642046', '创建工单【CESAFFFAS】。', '');
INSERT INTO `ticket_wrecord` VALUES ('240', '91', '56', '1555642447', '评论了工单：sssddA', '');
INSERT INTO `ticket_wrecord` VALUES ('241', '91', '95', '1555643462', '评论了工单：aaAAAA', '');
INSERT INTO `ticket_wrecord` VALUES ('242', '91', '95', '1555643520', '评论了工单：OOPOPOPOOOOOO', '');
INSERT INTO `ticket_wrecord` VALUES ('243', '90', '75', '1555643643', '修改了工单状态【受理人：cs1】【工单状态：受理中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('244', '90', '75', '1555643643', '评论了工单：VVA', '');
INSERT INTO `ticket_wrecord` VALUES ('245', '90', '75', '1555643649', '修改了工单状态【受理人：cs1】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('246', '92', '95', '1555646859', '创建工单【这个是有工单类型和优先级的工单】。', '');
INSERT INTO `ticket_wrecord` VALUES ('247', '93', '95', '1555646905', '创建工单【增加工单类型】。', '');
INSERT INTO `ticket_wrecord` VALUES ('248', '94', '95', '1555657371', '创建工单【Test File】。', '');
INSERT INTO `ticket_wrecord` VALUES ('249', '95', '95', '1555659670', '创建工单【upload excel file】。', '');
INSERT INTO `ticket_wrecord` VALUES ('250', '96', '95', '1555663567', '创建工单【upload file 1645】。', '');
INSERT INTO `ticket_wrecord` VALUES ('251', '97', '95', '1555663602', '创建工单【upload file 1646】。', '');
INSERT INTO `ticket_wrecord` VALUES ('252', '98', '95', '1555663834', '创建工单【upload file 1650】。', '');
INSERT INTO `ticket_wrecord` VALUES ('253', '99', '95', '1555668041', '创建工单【upload file】。', '');
INSERT INTO `ticket_wrecord` VALUES ('254', '100', '95', '1555668079', '创建工单【upload file】。', '');
INSERT INTO `ticket_wrecord` VALUES ('255', '101', '95', '1555899672', '创建工单【BBFAS】。', '');
INSERT INTO `ticket_wrecord` VALUES ('256', '102', '95', '1555924406', '创建工单【AAABBBB】。', '');
INSERT INTO `ticket_wrecord` VALUES ('257', '103', '95', '1555938535', '创建工单【asdasdasdasduiasduiasd】。', '');
INSERT INTO `ticket_wrecord` VALUES ('258', '104', '95', '1555938858', '创建工单【cnainaAAA】。', '');
INSERT INTO `ticket_wrecord` VALUES ('259', '105', '95', '1555938892', '创建工单【czxcaAABBBBCCCC】。', '');
INSERT INTO `ticket_wrecord` VALUES ('260', '90', '75', '1555987025', '修改了工单状态【受理人：cs1】【工单状态：正在研发中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('261', '95', '95', '1555992703', '评价了工单：【问题是否已经解决:是；服务评价：满意】。', '');
INSERT INTO `ticket_wrecord` VALUES ('262', '95', '95', '1555992704', '已关闭工单。', '');
INSERT INTO `ticket_wrecord` VALUES ('263', '106', '95', '1556000423', '创建工单【AAADDD】。', '');
INSERT INTO `ticket_wrecord` VALUES ('264', '105', '75', '1556002272', '评论了工单：AADDD', '');
INSERT INTO `ticket_wrecord` VALUES ('265', '105', '75', '1556002276', '评论了工单：cCC', '');
INSERT INTO `ticket_wrecord` VALUES ('266', '107', '95', '1556071099', '创建工单【AAAABBBBB】。', '');
INSERT INTO `ticket_wrecord` VALUES ('267', '108', '95', '1556071168', '创建工单【BBBBCCC】。', '');
INSERT INTO `ticket_wrecord` VALUES ('268', '93', '95', '1556071517', '评价了工单：【问题是否已经解决:是；服务评价：满意】。', '');
INSERT INTO `ticket_wrecord` VALUES ('269', '93', '95', '1556071518', '已关闭工单。', '');
INSERT INTO `ticket_wrecord` VALUES ('270', '108', '56', '1556071633', '修改了工单状态【受理人：黄智亮】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('271', '109', '95', '1556071703', '创建工单【BBVVVVV】。', '');
INSERT INTO `ticket_wrecord` VALUES ('272', '110', '95', '1556075040', '创建工单【CCAASAD】。', '');
INSERT INTO `ticket_wrecord` VALUES ('273', '111', '95', '1556075060', '创建工单【CCZCASD】。', '');
INSERT INTO `ticket_wrecord` VALUES ('274', '112', '95', '1556075405', '创建工单【CCAA】。', '');
INSERT INTO `ticket_wrecord` VALUES ('275', '113', '95', '1556075501', '创建工单【NMIKS】。', '');
INSERT INTO `ticket_wrecord` VALUES ('276', '114', '75', '1556086140', '创建工单【运维创建工单测试】。', '');
INSERT INTO `ticket_wrecord` VALUES ('277', '114', '56', '1556086453', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('278', '113', '56', '1556086460', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('279', '112', '56', '1556086521', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('280', '111', '56', '1556086527', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('281', '110', '56', '1556086532', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('282', '109', '56', '1556086538', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('283', '107', '56', '1556086543', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('284', '106', '56', '1556086548', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('285', '105', '56', '1556086553', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('286', '104', '56', '1556086558', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('287', '103', '56', '1556086563', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('288', '100', '56', '1556086577', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('289', '101', '56', '1556086612', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('290', '99', '56', '1556086619', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('291', '96', '56', '1556086624', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('292', '112', '75', '1556086686', '修改了工单状态【受理人：cs1】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('293', '112', '75', '1556086686', '评论了工单：AADDD', '');
INSERT INTO `ticket_wrecord` VALUES ('294', '112', '95', '1556086702', '评价了工单：【问题是否已经解决:是；服务评价：非常满意】。', '');
INSERT INTO `ticket_wrecord` VALUES ('295', '112', '95', '1556086703', '已关闭工单。', '');
INSERT INTO `ticket_wrecord` VALUES ('296', '114', '75', '1556086983', '修改了工单状态【受理人：cs1】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('297', '113', '75', '1556087024', '修改了工单状态【受理人：cs1】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('298', '113', '95', '1556087036', '评论了工单：AAC', '');
INSERT INTO `ticket_wrecord` VALUES ('299', '113', '95', '1556087045', '评价了工单：【问题是否已经解决:是；服务评价：非常满意】。', '');
INSERT INTO `ticket_wrecord` VALUES ('300', '113', '95', '1556087046', '已关闭工单。', '');
INSERT INTO `ticket_wrecord` VALUES ('301', '110', '75', '1556087277', '修改了工单状态【受理人：cs1】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('302', '110', '95', '1556087297', '评价了工单：【问题是否已经解决:是；服务评价：满意】。', '');
INSERT INTO `ticket_wrecord` VALUES ('303', '110', '95', '1556087298', '已关闭工单。', '');
INSERT INTO `ticket_wrecord` VALUES ('304', '109', '75', '1556087343', '修改了工单状态【受理人：cs1】【工单状态：待评价】。', '');
INSERT INTO `ticket_wrecord` VALUES ('305', '115', '95', '1556087798', '创建工单【FFAA】。', '');
INSERT INTO `ticket_wrecord` VALUES ('306', '115', '56', '1556087823', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('307', '94', '56', '1556087923', '评论了工单：CAAASD', '');
INSERT INTO `ticket_wrecord` VALUES ('308', '116', '95', '1556087973', '创建工单【DDAASS】。', '');
INSERT INTO `ticket_wrecord` VALUES ('309', '116', '56', '1556088003', '评论了工单：CCZZZADMIN', '');
INSERT INTO `ticket_wrecord` VALUES ('310', '116', '56', '1556088347', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('311', '116', '75', '1556099244', '修改了工单状态【受理人：cs1】【工单状态：正在研发中】。', '');
INSERT INTO `ticket_wrecord` VALUES ('312', '116', '75', '1556099820', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('313', '116', '75', '1556099956', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('314', '116', '75', '1556099960', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('315', '116', '75', '1556100032', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('316', '116', '75', '1556100193', '修改了工单状态【受理人：cs1】【工单状态：待处理】。', '');
INSERT INTO `ticket_wrecord` VALUES ('317', '116', '75', '1556100257', '修改了工单状态【受理人：cs1】【工单状态：待处理】【工单产品确认：已确认】【工单研发确认：已确认】【工单完成时间：】。', '');
INSERT INTO `ticket_wrecord` VALUES ('318', '116', '75', '1556100286', '修改了工单状态【受理人：cs1】<br>【工单状态：待处理】【工单产品确认：已确认】【工单研发确认：--】【工单完成时间：】。', '');
INSERT INTO `ticket_wrecord` VALUES ('319', '116', '75', '1556100304', '修改了工单状态<br>【受理人：cs1】<br>【工单状态：待处理】<br>【工单产品确认：已确认】<br>【工单研发确认：已确认】<br>【工单完成时间：】。', '');
INSERT INTO `ticket_wrecord` VALUES ('320', '114', '75', '1556102521', '修改了工单状态<br>【受理人：cs1】<br>【工单状态：待评价】<br>【工单产品确认：--】<br>【工单研发确认：--】<br>【工单完成时间：】', '');
INSERT INTO `ticket_wrecord` VALUES ('321', '114', '75', '1556102521', '评论了工单：第一点比较耗时间', '');
INSERT INTO `ticket_wrecord` VALUES ('322', '114', '75', '1556102550', '修改了工单状态<br>【受理人：cs1】<br>【工单状态：待评价】<br>【工单产品确认：--】<br>【工单研发确认：--】<br>【工单完成时间：】', '');
INSERT INTO `ticket_wrecord` VALUES ('323', '114', '75', '1556102562', '修改了工单状态<br>【受理人：cs1】<br>【工单状态：待评价】<br>【工单产品确认：已确认】<br>【工单研发确认：已确认】<br>【工单完成时间：】', '');
