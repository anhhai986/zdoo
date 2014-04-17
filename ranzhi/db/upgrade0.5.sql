ALTER TABLE `sys_product` CHANGE `summary`  `desc` text NOT NULL,
DROP `code`;

ALTER TABLE `crm_customer` ADD `intension` text NOT NULL AFTER `level`, DROP `referType`, DROP `referID`;

ALTER TABLE `crm_order` add `nextDate` date NOT NULL;

ALTER TABLE `crm_contract`
ADD `deliveredBy` char(30) COLLATE 'utf8_general_ci' NOT NULL AFTER `signedDate`,
ADD `deliveredDate` datetime NOT NULL AFTER `deliveredBy`,
ADD `returnedBy` char(30) COLLATE 'utf8_general_ci' NOT NULL AFTER `deliveredDate`,
ADD `returnedDate` datetime NOT NULL AFTER `returnedBy`,
ADD `handlers` varchar(255) NOT NULL AFTER `contact`;

ALTER TABLE sys_action ADD customer mediumint(8) UNSIGNED AFTER id,
ADD contact mediumint(8) UNSIGNED AFTER customer,
ADD contract mediumint(8) UNSIGNED AFTER contact,
CHANGE `product` `product`  mediumint(8) UNSIGNED AFTER contract;
