<?php 

$pageTitle = 'Profil - Telkom University'; 

require 'includes/header.php'; 

?> 

<section class="section"> 

    <div class="container article-body"> 

        <span class="eyebrow">Profil</span> 

        <h1>Tentang proyek simulasi Telkom University</h1> 

        <p class="lead">Halaman ini digunakan untuk mempraktikkan struktur halaman PHP yang memakai header dan footer bersama.</p> 

        <h2>Visi pembelajaran</h2> 

        <p>Mahasiswa memahami hubungan antarmuka web, logika PHP, basis data, dan version control melalui satu proyek terpadu.</p> 

        <h2>Tujuan proyek</h2> 

        <p>Proyek menampilkan profil, program studi, berita, serta formulir kontak. Data program studi dan berita dibaca dari database, sedangkan pesan pengguna disimpan menggunakan prepared statement.</p> 

        <div class="alert alert-success">Konten institusi pada website ini bersifat simulasi untuk keperluan praktikum.</div> 

<!-- Section Fokus Pembelajaran -->
<div style="margin-top: 32px; font-family: system-ui, -apple-system, sans-serif;">
    
    <!-- Judul Section -->
    <h2 style="font-size: 28px; font-weight: 700; color: #1e293b; margin-bottom: 20px;">
        Fokus Pembelajaran
    </h2>

    <!-- Grid Card Poin Pembelajaran -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;">
        
        <!-- Poin 1 -->
        <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-left: 4px solid #cc0310; border-radius: 8px; padding: 18px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); transition: transform 0.2s;">
            <div style="font-size: 24px; margin-bottom: 8px;">🌐</div>
            <h3 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0 0 6px 0;">
                Antarmuka Web
            </h3>
            <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">
                Mendesain tampilan web yang responsif, bersih, dan mudah digunakan.
            </p>
        </div>

        <!-- Poin 2 -->
        <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-left: 4px solid #cc0310; border-radius: 8px; padding: 18px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); transition: transform 0.2s;">
            <div style="font-size: 24px; margin-bottom: 8px;">⚙️</div>
            <h3 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0 0 6px 0;">
                Logika PHP & Basis Data
            </h3>
            <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">
                Mengintegrasikan alur logika sistem dengan pengolahan database.
            </p>
        </div>

        <!-- Poin 3 -->
        <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-left: 4px solid #cc0310; border-radius: 8px; padding: 18px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); transition: transform 0.2s;">
            <div style="font-size: 24px; margin-bottom: 8px;">🔀</div>
            <h3 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0 0 6px 0;">
                Version Control (Git)
            </h3>
            <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">
                Mengelola riwayat perubahan kode secara terstruktur menggunakan Git.
            </p>
        </div>

    </div>
</div>

</section> 

<?php require 'includes/footer.php'; ?> 