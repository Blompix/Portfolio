import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DatabaseConnection {

    private static Connection connection;

    static {
        try {
            // Chargement du pilote JDBC
            Class.forName("com.mysql.cj.jdbc.Driver");

            // Configuration de la connexion à la base de données
            String url = "jdbc:mysql://localhost:3308/bijoux?useUnicode=true&characterEncoding=UTF-8";
            String username = "root";
            String password = "";

            // Établissement de la connexion
            connection = DriverManager.getConnection(url, username, password);

            // Afficher un message de débogage
            System.out.println("Connexion à la base de données établie avec succès.");

        } catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
            throw new RuntimeException("Erreur lors de la connexion à la base de données.", e);
        }
    }

    public static Connection getConnection() {
        return connection;
    }

    public static void closeConnection() {
        try {
            if (connection != null && !connection.isClosed()) {
                connection.close();
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}
