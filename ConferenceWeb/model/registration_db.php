<?php
class RegistrationDB {
    public static function insertRegistration($firstName, $lastName, $title, $organization, $attendee, $address, $city, $state, $zip, $phone, $cardType, $cardNumber, $expDate, $paid, $confirmation) {
        $db = Database::getDB();
        $query = 'INSERT INTO registration
                        (firstName, lastName, title, organization, attendee, address, city, state, zip, phone, cardType, cardNumber, expDate, paid, confirmation)
                  VALUES
                        (:firstName, :lastName, :title, :organization, :attendee, :address, :city, :state, :zip, :phone, :cardType, :cardNumber, :expDate, :paid, :confirmation)';
        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':organization', $organization);
        $statement->bindValue(':attendee', $attendee);
        $statement->bindValue(':address', $address);
        $statement->bindValue(':city', $city);
        $statement->bindValue(':state', $state);
        $statement->bindValue(':zip', $zip);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':cardType', $cardType);
        $statement->bindValue(':cardNumber', $cardNumber);
        $statement->bindValue(':expDate', $expDate);
        $statement->bindValue(':paid', $paid);
        $statement->bindValue(':confirmation', $confirmation);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function deleteRegistration($registration_id) {
        $db = Database::getDB();
        $query = 'DELETE FROM registration WHERE registrationID = :registration_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':registration_id', $registration_id);
        $statement->execute();
        $statement->closeCursor();
    }
}
?>