-- Africa
UPDATE apps_countries 
SET continent = 'Africa' 
WHERE country_code IN ('DZ','AO','BJ','BW','BF','BI','CM','CV','CF','TD','KM',
'CG','CD','CI','DJ','EG','GQ','ER','ET','GA','GM','GH','GN','GW','KE','LS','LR',
'LY','MG','MW','ML','MR','MU','YT','MA','MZ','NA','NE','NG','RE','RW','ST','SN',
'SC','SL','SO','ZA','SD','SZ','TZ','TG','TN','UG','EH','ZM','ZW', 'ZR', 'TY','SH');

-- Asia
UPDATE apps_countries 
SET continent = 'Asia' 
WHERE country_code IN ('AF','AM','AZ','BH','BD','BT','BN','KH','CN','CY','GE',
'IN','ID','IR','IQ','IL','JP','JO','KZ','KW','KG','LA','LB','MY','MV','MN','MM',
'NP','KP','KR','OM','PK','PH','QA','SA','SG','LK','SY','TW','TJ','TH','TR','TM',
'AE','UZ','VN','YE','HK','MO','PS','CX','CC', 'TP');

--  Europe
UPDATE apps_countries 
SET continent = 'Europe' 
WHERE country_code IN ('AL','AD','AT','BY','BE','BA','BG','HR','CZ','DK','EE',
'FI','FR','DE','GR','HU','IS','IE','IT','LV','LI','LT','LU','MT','MD','MC','ME',
'NL','MK','NO','PL','PT','RO','RU','SM','RS','SK','SI','ES','SE','CH','UA','GB',
'VA','XK','GI','JE','GG','IM', 'IO', 'FX', 'FO', 'GK','SJ');

-- North America
UPDATE apps_countries 
SET continent = 'North America' 
WHERE country_code IN ('AG','BS','BB','BZ','CA','CR','CU','DM','DO','SV','GD',
'GT','HT','HN','JM','MX','NI','PA','KN','LC','VC','TT','US','VG','VI','BM',
'GL','KY','AI','MS','TC','PR','SX'.'UM', 'GP', 'MQ','PM');

-- South America
UPDATE apps_countries 
SET continent = 'South America' 
WHERE country_code IN ('AR','BO','BR','CL','CO','EC','GY','PY','PE','SR','UY',
'VE','FK', 'AW'. 'GF', 'AN');

-- Oceania
UPDATE apps_countries 
SET continent = 'Oceania' 
WHERE country_code IN ('AS','AU','FJ','PF','GU','KI','MH','FM','NR','NC','NZ',
'NU','MP','PW','PG','PN','WS','SB','TK','TO','TV','VU','WF','CK','NF');
 
-- Antarctica
UPDATE apps_countries 
SET continent = 'Antarctica' 
WHERE country_code IN ('AQ','BV','GS','HM','TF');
