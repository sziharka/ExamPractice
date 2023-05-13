using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace adatbevitel_eauto
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btAdatbevitel_Click(object sender, EventArgs e)
        {
            string kapcsolatString = "datasource=127.0.0.1;port=3306;username=root;password=;database=eauto;";

            string ev = tbEv.Text;
            string elektromos = tbElektromos.Text;
            string hagyomanyos = tbHagyomanyos.Text;
            string id = tbId.Text;

            string parancs = "INSERT eu_world set elektromos= " + elektromos + ", hagyomanyos =" + hagyomanyos + ", ev = " + ev + ", id=" + id;

            MySqlConnection adatbKapcsolat = new MySqlConnection(kapcsolatString);
            MySqlCommand commandDatabase = new MySqlCommand(parancs, adatbKapcsolat);
            commandDatabase.CommandTimeout = 60;

            try
            {
                adatbKapcsolat.Open();

                MySqlDataReader myreader = commandDatabase.ExecuteReader();

                MessageBox.Show("Sikeres az adatbevitel");

                adatbKapcsolat.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);// Show any error message.
            }
        }
        private void Form1_Load(object sender, EventArgs e)
        {

        }
    }
}
