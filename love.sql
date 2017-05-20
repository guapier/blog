/*
Navicat MySQL Data Transfer

Source Server         : mac
Source Server Version : 50716
Source Host           : 172.16.2.165:3306
Source Database       : xblog

Target Server Type    : MYSQL
Target Server Version : 50716
File Encoding         : 65001

Date: 2017-05-20 15:02:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for love
-- ----------------------------
DROP TABLE IF EXISTS `love`;
CREATE TABLE `love` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time` date NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of love
-- ----------------------------
INSERT INTO `love` VALUES ('1', '2017-08-24', 'hello,world');
INSERT INTO `love` VALUES ('2', '2017-09-28', '你好，世界');
INSERT INTO `love` VALUES ('3', '2017-03-31', '大家都说我性子很慢，其实我也可以很快，比如后面有狗追我或者，我芝在前面等我');
INSERT INTO `love` VALUES ('4', '2017-04-01', '我想把我看过的天空都拍给你看，我想把我喜欢的歌都唱给你听，\n我想把我爱吃的零食都寄给你吃，\n我想我芝开心的过好每一天。');
INSERT INTO `love` VALUES ('5', '2017-04-02', '人的欲望永无止境，就像一开始我只想知道你的名字。');
INSERT INTO `love` VALUES ('6', '2017-04-05', '告诉你，一想到你，我这张脸上就泛起微笑。还有在我安静的时候，你就从我内心深处浮现，你就是我生活中的傻白甜。');
INSERT INTO `love` VALUES ('7', '2017-04-06', '只因为在人群中多看了我芝一眼，从此就开始心疼我芝这个傻白甜。');
INSERT INTO `love` VALUES ('8', '2017-04-07', '虽然我本人如此平凡，但对我芝的爱一直很美。');
INSERT INTO `love` VALUES ('9', '2017-04-08', '看见我芝，我就想起了赵雷的那首南方姑娘，我芝就是我想芝芝不倦的去守护的傻白甜。');
INSERT INTO `love` VALUES ('10', '2017-04-09', '我想为我芝撑起一片天，一年四季都是我芝喜欢的天气');
INSERT INTO `love` VALUES ('11', '2017-04-10', '今天再次听到了女人花这首歌，女人心是水做的，所以眼泪总也流不干，流干了，也就没有心了，如果哪天我芝流泪了，我希望是开心和幸福的眼泪。如果哪天我惹我芝不开心了，别流泪，打我骂我就好，保证改正。');
INSERT INTO `love` VALUES ('12', '2017-04-11', '还记得有一次我给你唱的一首歌么，当你老了，头发白了，炉火旁打盹，回忆青春，多少人曾爱你青春欢畅的时辰，爱慕你的美丽，假意或真心，只有一个人还爱你虔诚的灵魂，爱你苍老的脸上的皱纹。to 傻白甜');
INSERT INTO `love` VALUES ('13', '2017-04-12', '爱情就像圆规，我芝就是我的圆心');
INSERT INTO `love` VALUES ('14', '2017-04-13', '一见你就想逗你笑，然后自己开始傻笑');
INSERT INTO `love` VALUES ('15', '2017-04-14', '我一点都不遗憾没有在最好的时光遇到你，因为遇到你之后最好的时光才开始。');
INSERT INTO `love` VALUES ('16', '2017-04-15', '令人心疼的菇凉，你还有我呢');
INSERT INTO `love` VALUES ('17', '2017-04-16', '我芝这么可爱，一定是个傻白甜');
INSERT INTO `love` VALUES ('18', '2017-04-17', '愿我芝这个傻白甜感冒快点好起来，我要多花点时间照顾我芝');
INSERT INTO `love` VALUES ('19', '2017-04-18', '我一生浪费过太多时间，却又突然在乎这一分钟');
INSERT INTO `love` VALUES ('20', '2017-04-20', '钟意我芝，即使捂住嘴巴也会从眼里跑出来');
INSERT INTO `love` VALUES ('21', '2017-04-21', '春风十里，五十里，一百里，鱼香肉丝，梅菜扣肉，清蒸鲈鱼，饼干曲奇，都不如你');
INSERT INTO `love` VALUES ('22', '2017-04-22', '不希望你做太阳，光芒万丈却过于辛苦疲惫，希望你做一颗星星，晴天的时候闪一闪，雨天记得躲我怀里来');
INSERT INTO `love` VALUES ('23', '2017-04-23', '愿林深时见鹿，海蓝时见鲸，梦醒时见你，走路时见你，工作时见你，学习时见你，时时刻刻见你');
INSERT INTO `love` VALUES ('24', '2017-04-25', '有芝兮，见之不忘，一日不见兮，思之如狂。');
INSERT INTO `love` VALUES ('25', '2017-04-25', '这个世界上就是存在某种没来由的爱，你出现一下子，我惦记一辈子。');
INSERT INTO `love` VALUES ('26', '2017-04-26', '夏天来了，你必须得热爱一些什么，比如你傻个；夏天来了，我也得热爱些什么，比如我傻白甜');
INSERT INTO `love` VALUES ('27', '2017-04-27', '你是人间四月天，是爱，是暖，是傻白甜');
INSERT INTO `love` VALUES ('28', '2017-04-28', '我想和你一起\r挥霍青春\r虚度时光\r这是我所能想到\r最浪漫的事');
INSERT INTO `love` VALUES ('29', '2017-04-29', '糖是甜的，茶是苦的，你是我的傻白甜 ');
INSERT INTO `love` VALUES ('30', '2017-05-01', '独坐草地上，顿觉少一人');
INSERT INTO `love` VALUES ('31', '2017-05-02', '会将心中的温柔全部给你，亲爱的傻白甜');
INSERT INTO `love` VALUES ('32', '2017-05-03', '从学长到逗比到傻个，还好一路有你');
INSERT INTO `love` VALUES ('33', '2017-05-04', '从小学妹到阿芝到傻白甜，感觉有点甜');
INSERT INTO `love` VALUES ('34', '2017-05-05', '醒来觉得甚是爱你，每天多一点点');
INSERT INTO `love` VALUES ('35', '2017-05-06', '中了一箭，胸口有点疼，丘比特射的');
INSERT INTO `love` VALUES ('36', '2017-05-07', '如果全世界都对你恶语相加，我就对你说上一世情话');
INSERT INTO `love` VALUES ('37', '2017-05-08', '海上月是天上月，眼前人是心上人');
INSERT INTO `love` VALUES ('38', '2017-05-08', '我想你一定很忙，所以你只需要看到前三个字就好了');
INSERT INTO `love` VALUES ('39', '2017-05-09', '每天不停撩你，喜欢看你害羞的样子。');
INSERT INTO `love` VALUES ('40', '2017-05-11', '一切有我在，一切有爱在。');
INSERT INTO `love` VALUES ('41', '2017-05-12', '有些东西是无法控制的，比如一个喷嚏，和想你。');
INSERT INTO `love` VALUES ('42', '2017-05-13', '今天天气很好，光顾着追剧了，都忘记想你了，罪过');
INSERT INTO `love` VALUES ('43', '2017-05-15', '今天深圳下了好大的雨，我第一想到的竟然是还好你回去了');
INSERT INTO `love` VALUES ('44', '2017-05-16', '给我60斤的货物，我肯定搬不动。给我一百斤的你，我抱起来撒腿就跑。');
INSERT INTO `love` VALUES ('45', '2017-05-17', '我跟你讲个故事吧，这个故事很长，我长话短说，我想你了。');
INSERT INTO `love` VALUES ('46', '2017-05-18', '夜澜卧听风吹雨，铁马是你，冰河也是你。');
INSERT INTO `love` VALUES ('47', '2017-05-19', '温馨提示：你已经半小时没有和你的小可爱联系了，天干物燥，小心她闹！');
INSERT INTO `love` VALUES ('48', '2017-05-20', '有时候会忍不住嫉妒你妈妈，因为她见过小时候的那个圆圆的软软的小手小脚奶声奶气的你。');
