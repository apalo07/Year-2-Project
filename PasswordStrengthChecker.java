import java.util.regex.Matcher;
import java.util.regex.Pattern;


public class PasswordStrengthChecker {

    public static void main(String[] args) {
        String password = "Passwordhere1";
        
        if (Password (password)) {
            System.out.println("Your Password is strong.");
        } else {
            System.out.println("Your Password is weak. Create a stronger password.");
        }
    }

    public static boolean Password (String password) {
     
    	  if (!(password.matches(".*[a-z]+.*") && password.matches(".*[A-Z]+.*"))) {
              return false;
        }
    	  
    	  if (password.length() < 8) {
        return false;
      
        }
    	  if (!password.matches(".*\\d+.*")) {
              return false;
        }

      
        Pattern specialCharacter = Pattern.compile("[!@#$%^&*()_+\\-=\\[\\]{};':\"\\\\|,.<>\\/?]+");
        Matcher match = specialCharacter.matcher(password);
        if (!match.find()) {
            return false;
        }

        return true;
    }
}