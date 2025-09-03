-- How to do a stored procedure

DELIMITER //

CREATE PROCEDURE GetCountries()
BEGIN
    SELECT country_name 
    FROM apps_countries
    ORDER BY country_name ASC;
END //

DELIMITER ;

