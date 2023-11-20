<?php
require 'Connection.php';

class Authenticate extends Connection {
// --------------------------------------------------------------------------REGISTROS--------------------------------------------------------------------
// Administrador del sistema
    public function registrarAdmin($user, $pass) {

        $link = parent::connect(); // Conexión llamando al método del padre del que hereda
        $consultation = "INSERT INTO User (us_name, us_pass, us_priority) VALUES (?,?)";
        $query = $link->prepare($consultation);
        $query->bind_param('ss', $user, $password);
        return $query->execute(); // Devuelve true o false.
    }

// --------------------------------------------------------------------------REGISTROS--------------------------------------------------------------------

// -------------------------------------------------------------------------VALIDACIONES--------------------------------------------------------------------
    /* CONTRASEÑA */
    public function ValidPassword($pass) { /* Validación contraseña compuesta por dígitos, minúsculas y mayúsculas y símbolos La contraseña debe tener al entre 8 y 16 caracteres, 
      al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter no alfanumérico. */

        $password = '/^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/';
        if (preg_match($password, $pass)) {
            return true;
        } else {
            return false;
        }
    }

    public function confirmPassword($pass, $pass2) {
        if ($pass === $pass2) {
            return true;
        } else {
            return false;
        }
    }

    /* E-MAIL */
    public function ValidEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) || preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $email)) {
            return true;
        } else {
                        // mandar a excepciones.php email no válido 
            return false;
        }
    }

    /* DNI/CIF/NIE */
    public function validDniCifNie($dni) {    // Validación Dni, Nie, Cif
        $cif = strtoupper($dni);
        for ($i = 0; $i < 9; $i++) {
            $num[$i] = substr($cif, $i, 1);
        }

        // Si no tiene un formato valido devuelve error
        if (!preg_match('/((^[A-Z]{1}[0-9]{7}[A-Z0-9]{1}$|^[T]{1}[A-Z0-9]{8}$)|^[0-9]{8}[A-Z]{1}$)/', $cif)) {
            return false;
        }

        // Comprobacion de NIF estandar
        if (preg_match('/(^[0-9]{8}[A-Z]{1}$)/', $cif)) {
            if ($num[8] == substr('TRWAGMYFPDXBNJZSQVHLCKE', substr($cif, 0, 8) % 23, 1)) {
                return true;
            } else {
                return false;
            }
        }

        // Comprobación de codigos tipo CIF
        $sum = $num[2] + $num[4] + $num[6];
        for ($i = 1; $i < 8; $i += 2) {
            $sum += (int) substr((2 * $num[$i]), 0, 1) + (int) substr((2 * $num[$i]), 1, 1);
        }
        $n = 10 - substr($sum, strlen($sum) - 1, 1);

        // Comprobacion de NIFs especiales (se calculan como CIFs o como NIFs)
        if (preg_match('/^[KLM]{1}/', $cif)) {
            if ($num[8] == chr(64 + $n) || $num[8] == substr('TRWAGMYFPDXBNJZSQVHLCKE', substr($cif, 1, 8) % 23, 1)) {
                return true;
            } else {
                return false;
            }
        }
        // Comprobacion de CIF
        if (preg_match('/^[ABCDEFGHJNPQRSUVW]{1}/', $cif)) {
            if ($num[8] == chr(64 + $n) || $num[8] == substr($n, strlen($n) - 1, 1)) {
                return true;
            } else {
                return false;
            }
        }
        // Comprobacion de NIE
        if (preg_match('/^[T]{1}/', $cif)) {
            if ($num[8] == preg_match('/^[T]{1}[A-Z0-9]{8}$/', $cif)) {
                return true;
            } else {
                return false;
            }
        }
        // XYZ
        if (preg_match('/^[XYZ]{1}/', $cif)) {
            if ($num[8] == substr('TRWAGMYFPDXBNJZSQVHLCKE', substr(str_replace(array('X', 'Y', 'Z'), array('0', '1', '2'), $cif), 0, 8) % 23, 1)) {
                return true;
            } else {
                return false;
            }
        }
        // Si todavía no se ha verificado devuelve error
        return false;
    }

// -------------------------------------------------------------------------VALIDACIONES--------------------------------------------------------------------
// -------------------------------------------------------------------------ACCESO--------------------------------------------------------------------------
    /* Función para saber si hay admin */
    public function thereIsAdmin() {

        $link = parent::connect(); // Conexión llamando al método del padre del que hereda
        $value = false;
        $consultation = 'SELECT count(*) FROM User';
        $query = mysqli_query($link, $consultation);
        $row = mysqli_fetch_row($query); // Solo devuelve un valor
        if (intval($row[0]) > 0) {
            $value = true;
        } else {
            $value = false;
        }
        return $value;
    }

// -------------------------------------------------------------------------ACCESO--------------------------------------------------------------------
}
