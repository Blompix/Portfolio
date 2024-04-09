import javax.swing.*;
import javax.swing.table.DefaultTableModel;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Vector;

public class ApplicationSAV extends JFrame {

    private JTextField nomField, prenomField, telephoneField, emailField;
    private JTextArea descriptionArea;
    private JButton submitButton, modifierButton, dossierEnCoursButton;
    private JTable historiqueTable;
    private DefaultTableModel tableModel;

    public ApplicationSAV() {
        super("Application SAV");

        // Initialisation des composants
        nomField = new JTextField(20);
        prenomField = new JTextField(20);
        telephoneField = new JTextField(20);
        emailField = new JTextField(20);
        descriptionArea = new JTextArea(5, 20);
        submitButton = new JButton("Soumettre");
        modifierButton = new JButton("Modifier");
        dossierEnCoursButton = new JButton("Dossier en cours");
        tableModel = new DefaultTableModel(new Object[]{"Nom", "Prénom", "Téléphone", "E-mail", "Description", "Date d'envoi", "État"}, 0);
        historiqueTable = new JTable(tableModel);

        // Configuration du bouton "Soumettre"
        submitButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                soumettreFormulaire();
            }
        });

        // Configuration du bouton "Modifier"
        modifierButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                modifierFormulaire();
            }
        });

        // Configuration du bouton "Dossier en cours"
        dossierEnCoursButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                afficherDossierEnCours();
            }
        });

        // Mise en page avec GridBagLayout
        setLayout(new GridBagLayout());
        GridBagConstraints gbc = new GridBagConstraints();
        gbc.gridx = 0;
        gbc.gridy = 0;
        gbc.insets = new Insets(5, 5, 5, 5);

        gbc.gridx++;
        gbc.gridy = 0;
        gbc.gridwidth = 1;
        gbc.fill = GridBagConstraints.HORIZONTAL;
        add(new JLabel("Nom:"), gbc);
        gbc.gridy++;
        add(new JLabel("Prénom:"), gbc);
        gbc.gridy++;
        add(new JLabel("Téléphone:"), gbc);
        gbc.gridy++;
        add(new JLabel("E-mail:"), gbc);
        gbc.gridy++;
        add(new JLabel("Description du problème:"), gbc);

        gbc.gridx++;
        gbc.gridy = 0;
        gbc.weightx = 1.0;
        gbc.fill = GridBagConstraints.HORIZONTAL;
        add(nomField, gbc);
        gbc.gridy++;
        add(prenomField, gbc);
        gbc.gridy++;
        add(telephoneField, gbc);
        gbc.gridy++;
        add(emailField, gbc);
        gbc.gridy++;
        gbc.gridwidth = 2;
        gbc.fill = GridBagConstraints.BOTH;
        add(new JScrollPane(descriptionArea), gbc);
        gbc.gridy++;
        gbc.gridwidth = 1;
        gbc.fill = GridBagConstraints.HORIZONTAL;
        add(submitButton, gbc);
        gbc.gridx++;
        add(modifierButton, gbc);
        gbc.gridx++;
        add(dossierEnCoursButton, gbc);

        // Ajout du tableau d'historique
        gbc.gridx = 0;
        gbc.gridy++;
        gbc.gridwidth = 3;
        gbc.fill = GridBagConstraints.HORIZONTAL;
        add(new JLabel("Historique des formulaires SAV:"), gbc);

        gbc.gridy++;
        gbc.fill = GridBagConstraints.BOTH;
        historiqueTable.setBackground(new Color(240, 240, 240));
        historiqueTable.setBorder(BorderFactory.createLineBorder(new Color(180, 180, 180)));
        add(new JScrollPane(historiqueTable), gbc);

        // Remplir l'historique avec les données de la base de données
        chargerHistoriqueDepuisBaseDeDonnees();

        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        pack();
        setLocationRelativeTo(null);
        setVisible(true);
    }

    private void soumettreFormulaire() {
        String nom = nomField.getText();
        String prenom = prenomField.getText();
        String telephone = telephoneField.getText();
        String email = emailField.getText();
        String descriptionProbleme = descriptionArea.getText();
        String dateEnvoi = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss").format(new Date());
        String etat = "En attente";  // État par défaut "En attente"

        Vector<String> rowData = new Vector<>();
        rowData.add(nom);
        rowData.add(prenom);
        rowData.add(telephone);
        rowData.add(email);
        rowData.add(descriptionProbleme);
        rowData.add(dateEnvoi);
        rowData.add(etat);
        tableModel.addRow(rowData);

        effacerChamps();
        insererDansBaseDeDonnees(nom, prenom, telephone, email, descriptionProbleme, dateEnvoi, etat);
    }

    private void modifierFormulaire() {
        int selectedRow = historiqueTable.getSelectedRow();
        if (selectedRow != -1) {
            nomField.setText((String) historiqueTable.getValueAt(selectedRow, 0));
            prenomField.setText((String) historiqueTable.getValueAt(selectedRow, 1));
            telephoneField.setText((String) historiqueTable.getValueAt(selectedRow, 2));
            emailField.setText((String) historiqueTable.getValueAt(selectedRow, 3));
            descriptionArea.setText((String) historiqueTable.getValueAt(selectedRow, 4));
            tableModel.removeRow(selectedRow);
            mettreAJourDansBaseDeDonnees(selectedRow);
        } else {
            JOptionPane.showMessageDialog(this, "Veuillez sélectionner une ligne à modifier.", "Aucune ligne sélectionnée", JOptionPane.WARNING_MESSAGE);
        }
    }

    private void afficherDossierEnCours() {
        JFrame dossierEnCoursFrame = new JFrame("Dossier en cours");
        DefaultTableModel dossierEnCoursModel = new DefaultTableModel(new Object[]{"Nom", "Prénom", "Téléphone", "E-mail", "Description", "Date d'envoi", "État"}, 0);
        JTable dossierEnCoursTable = new JTable(dossierEnCoursModel);

        // Remplir le tableau avec les formulaires "En cours"
        for (int i = 0; i < tableModel.getRowCount(); i++) {
            if ("En cours".equals(tableModel.getValueAt(i, 6))) {
                Vector<String> rowData = new Vector<>();
                for (int j = 0; j < tableModel.getColumnCount(); j++) {
                    rowData.add((String) tableModel.getValueAt(i, j));
                }
                dossierEnCoursModel.addRow(rowData);
            }
        }

        dossierEnCoursFrame.setLayout(new BorderLayout());
        dossierEnCoursFrame.add(new JScrollPane(dossierEnCoursTable), BorderLayout.CENTER);

        dossierEnCoursFrame.setSize(600, 400);
        dossierEnCoursFrame.setLocationRelativeTo(null);
        dossierEnCoursFrame.setVisible(true);
    }

    private void insererDansBaseDeDonnees(String nom, String prenom, String telephone, String email, String description, String date, String etat) {
        try {
            Connection connection = DatabaseConnection.getConnection();
            String query = "INSERT INTO formulaire_sav (nom, prenom, telephone, email, description, date_envoi, etat) VALUES (?, ?, ?, ?, ?, ?, ?)";
            try (PreparedStatement preparedStatement = connection.prepareStatement(query)) {
                preparedStatement.setString(1, nom);
                preparedStatement.setString(2, prenom);
                preparedStatement.setString(3, telephone);
                preparedStatement.setString(4, email);
                preparedStatement.setString(5, description);
                preparedStatement.setString(6, date);
                preparedStatement.setString(7, etat);
                preparedStatement.executeUpdate();
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    private void mettreAJourDansBaseDeDonnees(int rowIndex) {
        try {
            Connection connection = DatabaseConnection.getConnection();
            String query = "UPDATE formulaire_sav SET nom=?, prenom=?, telephone=?, email=?, description=?, etat=? WHERE date_envoi=?";
            try (PreparedStatement preparedStatement = connection.prepareStatement(query)) {
                preparedStatement.setString(1, nomField.getText());
                preparedStatement.setString(2, prenomField.getText());
                preparedStatement.setString(3, telephoneField.getText());
                preparedStatement.setString(4, emailField.getText());
                preparedStatement.setString(5, descriptionArea.getText());
                preparedStatement.setString(6, (String) historiqueTable.getValueAt(rowIndex, 6)); // L'état est à l'index 6
                preparedStatement.setString(7, (String) historiqueTable.getValueAt(rowIndex, 5)); // La date d'envoi est à l'index 5
                preparedStatement.executeUpdate();
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    private void effacerChamps() {
        nomField.setText("");
        prenomField.setText("");
        telephoneField.setText("");
        emailField.setText("");
        descriptionArea.setText("");
    }

    private void chargerHistoriqueDepuisBaseDeDonnees() {
        try {
            Connection connection = DatabaseConnection.getConnection();
            String query = "SELECT * FROM formulaire_sav";
            try (PreparedStatement preparedStatement = connection.prepareStatement(query);
                 ResultSet resultSet = preparedStatement.executeQuery()) {
                while (resultSet.next()) {
                    Vector<String> rowData = new Vector<>();
                    rowData.add(resultSet.getString("nom"));
                    rowData.add(resultSet.getString("prenom"));
                    rowData.add(resultSet.getString("telephone"));
                    rowData.add(resultSet.getString("email"));
                    rowData.add(resultSet.getString("description"));
                    rowData.add(resultSet.getString("date_envoi"));
                    rowData.add(resultSet.getString("etat"));
                    tableModel.addRow(rowData);
                }
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() {
            @Override
            public void run() {
                new ApplicationSAV();
            }
        });
    }
}
