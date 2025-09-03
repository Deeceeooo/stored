CREATE VIEW asian_countries AS
SELECT id, country_code, country_name
FROM apps_countries
WHERE continent = 'Asia'
ORDER BY country_name ASC;


-- edit continent column
UPDATE apps_countries
SET continent = 'Asia'
WHERE country_code = 'PH';
