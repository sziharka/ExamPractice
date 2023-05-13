namespace adatbevitel_eauto
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.btFrissites = new System.Windows.Forms.Button();
            this.lbEv = new System.Windows.Forms.Label();
            this.lbElektromos = new System.Windows.Forms.Label();
            this.lbHagyomanyos = new System.Windows.Forms.Label();
            this.tbEv = new System.Windows.Forms.TextBox();
            this.tbElektromos = new System.Windows.Forms.TextBox();
            this.tbHagyomanyos = new System.Windows.Forms.TextBox();
            this.IbId = new System.Windows.Forms.Label();
            this.tbId = new System.Windows.Forms.TextBox();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.SuspendLayout();
            // 
            // pictureBox1
            // 
            this.pictureBox1.Image = ((System.Drawing.Image)(resources.GetObject("pictureBox1.Image")));
            this.pictureBox1.Location = new System.Drawing.Point(355, 28);
            this.pictureBox1.Margin = new System.Windows.Forms.Padding(4);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(251, 151);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.pictureBox1.TabIndex = 0;
            this.pictureBox1.TabStop = false;
            // 
            // btFrissites
            // 
            this.btFrissites.Location = new System.Drawing.Point(169, 28);
            this.btFrissites.Margin = new System.Windows.Forms.Padding(4);
            this.btFrissites.Name = "btFrissites";
            this.btFrissites.Size = new System.Drawing.Size(168, 60);
            this.btFrissites.TabIndex = 0;
            this.btFrissites.Text = "Frissítés";
            this.btFrissites.UseVisualStyleBackColor = true;
            this.btFrissites.Click += new System.EventHandler(this.btAdatbevitel_Click);
            // 
            // lbEv
            // 
            this.lbEv.AutoSize = true;
            this.lbEv.Location = new System.Drawing.Point(19, 49);
            this.lbEv.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.lbEv.Name = "lbEv";
            this.lbEv.Size = new System.Drawing.Size(26, 16);
            this.lbEv.TabIndex = 1;
            this.lbEv.Text = "Év:";
            // 
            // lbElektromos
            // 
            this.lbElektromos.AutoSize = true;
            this.lbElektromos.Location = new System.Drawing.Point(19, 105);
            this.lbElektromos.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.lbElektromos.Name = "lbElektromos";
            this.lbElektromos.Size = new System.Drawing.Size(114, 16);
            this.lbElektromos.TabIndex = 1;
            this.lbElektromos.Text = "Elektromos autók:";
            // 
            // lbHagyomanyos
            // 
            this.lbHagyomanyos.AutoSize = true;
            this.lbHagyomanyos.Location = new System.Drawing.Point(19, 159);
            this.lbHagyomanyos.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.lbHagyomanyos.Name = "lbHagyomanyos";
            this.lbHagyomanyos.Size = new System.Drawing.Size(135, 16);
            this.lbHagyomanyos.TabIndex = 1;
            this.lbHagyomanyos.Text = "Hagyományos autók:";
            // 
            // tbEv
            // 
            this.tbEv.Location = new System.Drawing.Point(63, 46);
            this.tbEv.Margin = new System.Windows.Forms.Padding(4);
            this.tbEv.Name = "tbEv";
            this.tbEv.Size = new System.Drawing.Size(77, 22);
            this.tbEv.TabIndex = 2;
            // 
            // tbElektromos
            // 
            this.tbElektromos.Location = new System.Drawing.Point(167, 105);
            this.tbElektromos.Margin = new System.Windows.Forms.Padding(4);
            this.tbElektromos.Name = "tbElektromos";
            this.tbElektromos.Size = new System.Drawing.Size(169, 22);
            this.tbElektromos.TabIndex = 2;
            // 
            // tbHagyomanyos
            // 
            this.tbHagyomanyos.Location = new System.Drawing.Point(167, 155);
            this.tbHagyomanyos.Margin = new System.Windows.Forms.Padding(4);
            this.tbHagyomanyos.Name = "tbHagyomanyos";
            this.tbHagyomanyos.Size = new System.Drawing.Size(169, 22);
            this.tbHagyomanyos.TabIndex = 2;
            // 
            // IbId
            // 
            this.IbId.AutoSize = true;
            this.IbId.Location = new System.Drawing.Point(19, 12);
            this.IbId.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.IbId.Name = "IbId";
            this.IbId.Size = new System.Drawing.Size(21, 16);
            this.IbId.TabIndex = 1;
            this.IbId.Text = "Id:";
            // 
            // tbId
            // 
            this.tbId.Location = new System.Drawing.Point(63, 9);
            this.tbId.Margin = new System.Windows.Forms.Padding(4);
            this.tbId.Name = "tbId";
            this.tbId.Size = new System.Drawing.Size(77, 22);
            this.tbId.TabIndex = 2;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(653, 220);
            this.Controls.Add(this.tbId);
            this.Controls.Add(this.IbId);
            this.Controls.Add(this.tbHagyomanyos);
            this.Controls.Add(this.tbElektromos);
            this.Controls.Add(this.tbEv);
            this.Controls.Add(this.lbHagyomanyos);
            this.Controls.Add(this.lbElektromos);
            this.Controls.Add(this.lbEv);
            this.Controls.Add(this.btFrissites);
            this.Controls.Add(this.pictureBox1);
            this.Name = "Form1";
            this.Text = "Adatbevitel";
            this.Load += new System.EventHandler(this.Form1_Load);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.Button btFrissites;
        private System.Windows.Forms.Label lbEv;
        private System.Windows.Forms.Label lbElektromos;
        private System.Windows.Forms.Label lbHagyomanyos;
        private System.Windows.Forms.TextBox tbEv;
        private System.Windows.Forms.TextBox tbElektromos;
        private System.Windows.Forms.TextBox tbHagyomanyos;
        private System.Windows.Forms.Label IbId;
        private System.Windows.Forms.TextBox tbId;
    }
}

