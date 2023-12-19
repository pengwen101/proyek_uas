CREATE TABLE IF NOT EXISTS `product`(
    `id` int NOT NULL AUTO_INCREMENT,
    `code` varchar(10) NOT NULL UNIQUE,
    `type` tinyint(1) NOT NULL,
    `name` varchar(50) NOT NULL,
    `img` varchar(50) NOT NULL,
    `dsc` varchar(255) NOT NULL,
    `price` decimal(19, 4) NOT NULL,
    `stock` int NOT NULL,
    PRIMARY KEY (`id`)
)Engine=InnoDB CHARSET=utf8mb4 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `customer`(
    `id_cust` int NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL UNIQUE,
    `email` varchar(255) NOT NULL,
    `birth_date` date NOT NULL,
    `address` varchar(255) NOT NULL,
    `phone` varchar(20) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (`id_cust`)
)Engine=InnoDB CHARSET=utf8mb4 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `cart`(
    `id` int NOT NULL AUTO_INCREMENT,
    `id_cust` int NOT NULL,
    `product_id` varchar(10) NOT NULL,
    `qty` int,
    `schedule` date,
    `is_selected` tinyint(1) NOT NULL,
    
    PRIMARY KEY (`id`),
    FOREIGN KEY(`id_cust`) REFERENCES `customer` (`id_cust`) ON DELETE CASCADE,
    FOREIGN KEY(`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE

) Engine=InnoDB CHARSET=utf8mb4 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `transaction`(
    `id` int NOT NULL AUTO_INCREMENT,
    `id_cust` int NOT NULL,
    `shipment_id` int NOT NULL,
    `payment_method` tinyint(2) NOT NULL,
    `total` decimal(19,4) NOT NULL,
    `timestamp` timestamp NOT NULL,

    PRIMARY KEY(`id`),
    FOREIGN KEY(`id_cust`) REFERENCES `customer` (`id_cust`) ON DELETE CASCADE,
    FOREIGN KEY(`shipment_id`) REFERENCES `shipment` (`id`) ON DELETE CASCADE
) Engine=InnoDB CHARSET=utf8mb4 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `shipment`(
    `id` int NOT NULL,
    `name` varchar(20) NOT NULL,
    `price` decimal(19,4) NOT NULL,

    PRIMARY KEY(`id`)
)Engine=InnoDB CHARSET=utf8mb4 AUTO_INCREMENT=1;




