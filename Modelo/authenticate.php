<?php

class Authenticate extends conexion {

// -------------------------------------------------------------------------VALIDACIONES--------------------------------------------------------------------
   /* CAMPO NOMBRE LOGIN FORMATO */
    public function ValidaLoginNombre($nombre) {
        // Quitar espacios en blanco y todas a minusculas para validacion.
        $nombreFormateado = strtolower(str_replace(' ', '', $nombre));
        $RegNombre = '/^[a-z]*$/';
        if (preg_match($RegNombre, $nombreFormateado)) {
            return true;
        } else {
            return false;
        }
    }
   
    /* CAMPO CONTRASEÑA LOGIN FORMATO*/
    public function ValidaLoginPassword($pass) {
        /* Validación contraseña compuesta por dígitos, minúsculas y mayúsculas y símbolos La contraseña debe tener al entre 8 y 16 caracteres, 
          al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter no alfanumérico. */
        // /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$     
        /*  Regex sencilla solo 6 números */
        $password = '/^[0-9]{6}$/';
        if (preg_match($password, $pass)) {
            return true;
        } else {
            return false;
        }
    }
    
    
    /* CAMPO PASSWORD CONTRA PASSWORD DDBB 
    public function ValidaPasswordDataBase($password , $passwordDB) {
        
        
        if (password_verify($password, $passwordDB)) {
            return true;
        } else {
            echo 'password incorrecto';
        }
    }*/
  
    /* CAMPO E-MAIL */
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
}
