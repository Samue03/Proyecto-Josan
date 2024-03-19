<?php
class Enrutador
{
    public function __cargarView($view)
    {
        switch ($view):
            case 'personal area':
                echo "<script>
                location.href = `../View/personal area.html`;
                </script>";
                break;
            case 'Recover':
                echo "<script>
                location.href = `../View/Recover.html`;
                </script>";
                break;
            case 'recover account':
                echo "<script>
                location.href = `../View/recover account.html`;
                </script>";
                break;
            case 'sign in':
                echo "<script>
                location.href = `../View/sign in.php`;
                </script>";
                break;
            case 'sign up-Asistente':
                echo "<script>
                location.href = `../View/sign up-Asistente.php`;
                </script>";
                break;
            case 'sign up-paciente':
                echo "<script>
                location.href = `../View/sign up-paciente.php`;
                </script>";
                break;
            case 'sign up-tratamiento':
                echo "<script>
                location.href = `../View/sign up-tratamiento.html`;
                </script>";
                break;
            case 'sign up':
                echo "<script>
                location.href = `../View/sign up.php`;
                </script>";
                break;
            case 'sign upMedico':
                echo "<script>
                location.href = `../View/sign up.Medico.php`;
                </script>";
                break;
            case 'DatosEspecifico':
                echo "<script>
                location.href = `../View/DatosEspecifico.php`;
                </script>";
                break;
            case 'showUser':
                echo "<script>
                    location.href = `../View/showUser.php`;
                    </script>";
                break;
            default:
                echo "<script>
                location.href = `../View/error.php`;
                </script>";
                break;
        endswitch;
    }
    public function __Validrget($view)
    {
        if (!empty($view)) {
            return true; // La variable $view tiene un valor, permite la carga de la vista correspondiente.
        } else {
            include_once('../View/index.php'); // La variable $view está vacía, carga la vista de inicio de sesión.
            return false;
        }
    }
}
