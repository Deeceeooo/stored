DELIMITER $$

CREATE PROCEDURE GetCountryByCode (
    IN p_country_code VARCHAR(2)
)
BEGIN
    SELECT id, country_code, country_name
    FROM apps_countries
    WHERE country_code = p_country_code;
END$$

DELIMITER ;

-- IN p_country_code VARCHAR(2) → your only input parameter (2 letters, e.g., 'PH').

-- The procedure looks up rows in apps_countries where country_code matches.

-- It will return the id, country_code, and country_name.