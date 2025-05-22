<style>
    .table-warning {
        background-color: rgb(224, 107, 10);
        color: white;
    }

    .header-navigation-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .header-navigation ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: 20px;
    }

    .header-navigation ul li {
        position: relative;
    }

    .header-navigation ul li a {
        text-decoration: none;
        color: #333;
        padding: 10px 15px;
        display: block;
        transition: color 0.3s;
    }

    .header-navigation ul li a:hover {
        color: #007bff;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        list-style: none;
        padding: 10px 0;
        margin: 0;
        z-index: 1000;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu li a {
        padding: 10px 20px;
        color: #333;
        white-space: nowrap;
    }

    .dropdown-menu li a:hover {
        background-color: #f8f9fa;
        color: #007bff;
    }

    .menu-search {
        position: relative;
    }

    .search-box {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        background: white;
        padding: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .search-box.active {
        display: block;
    }

    .search-btn {
        cursor: pointer;
        font-size: 18px;
        color: #333;
    }

    .search-btn:hover {
        color: #007bff;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .header-navigation ul {
            flex-direction: column;
            gap: 10px;
        }

        .header-navigation ul li {
            width: 100%;
        }

        .header-navigation ul li a {
            text-align: center;
        }

        .dropdown-menu {
            position: static;
            box-shadow: none;
        }

        .menu-search {
            margin-top: 10px;
        }
    }
</style>
<div class="pre-header">
    <div class="container">
        <div class="row">
            <!-- BEGIN TOP BAR LEFT PART -->
            <div class="col-md-6 col-sm-6 additional-shop-info">
                <ul class="list-unstyled list-inline">
                    <li><i class="fa fa-phone"></i><span>+6282162118932</span></li>
                    <li><i class="fa fa-envelope-o"></i><span>info@keenthemes.com</span></li>
                </ul>
            </div>
            <!-- END TOP BAR LEFT PART -->
            <!-- BEGIN TOP BAR MENU -->
            <div class="col-md-6 col-sm-6 additional-nav">
                <ul class="list-unstyled list-inline pull-right">
                    <li><a href="login.html">Log In</a></li>
                    <li><a href="page-reg-page.html">Registration</a></li>
                </ul>
            </div>
            <!-- END TOP BAR MENU -->
        </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
        <div class="header-navigation-container">
            <div class="site-logo">
                <a href="index.php">
                    <img src="assets/corporate/img/logos/LOGO HKBP.png" width="80" alt="Logo" class="logo-img">
                </a>
            </div>
            <div class="header-navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="javascript:;">Tentang</a>
                        <ul class="dropdown-menu">
                            <li><a href="Visi&misi.php">Visi & Misi</a></li>
                            <li><a href="sejarah gereja.html">Sejarah Gereja</a></li>
                            <li><a href="program pelayanan.php">Program Pelayanan</a></li>
                            <li><a href="Galeri.php">Galeri</a></li>
                        </ul>
                    </li>
                    <li><a href="jemaat.php">Jemaat</a></li>
                    <li><a href="Warta Jemaat.php">Warta Jemaat</a></li>
                    <li><a href="Struktur Gereja.php">Struktur Gereja</a></li>
                    <li class="dropdown">
                        <a href="javascript:;">Kegiatan Gereja</a>
                        <ul class="dropdown-menu">
                            <li><a href="Koor.php">Koor</a></li>
                            <li><a href="Event.php">Event</a></li>
                            <li><a href="Remaja Naposo.php">Remaja Naposo</a></li>
                        </ul>
                    </li>
                    <li><a href="Peta.php">Peta/Maps</a></li>
                    <li class="menu-search">
                        <i class="fa fa-search search-btn"></i>
                        <div class="search-box">
                            <form onsubmit="return searchContent();">
                                <input type="text" id="searchInput" placeholder="Search..." required>
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    function searchContent() {
        const input = document.getElementById("searchInput").value.toLowerCase();
        const walker = document.createTreeWalker(document.body, NodeFilter.SHOW_TEXT, null, false);
        let found = false;

        // Hapus highlight sebelumnya
        document.querySelectorAll(".highlight").forEach(el => {
            el.outerHTML = el.innerHTML;
        });

        // Cari dan sorot hasil
        while (walker.nextNode()) {
            const node = walker.currentNode;
            const parent = node.parentNode;

            if (node.nodeValue.toLowerCase().includes(input)) {
                const regex = new RegExp(`(${input})`, "gi");
                const highlightedHTML = node.nodeValue.replace(regex, '<span class="highlight">$1</span>');
                const tempDiv = document.createElement("div");
                tempDiv.innerHTML = highlightedHTML;

                while (tempDiv.firstChild) {
                    parent.insertBefore(tempDiv.firstChild, node);
                }
                parent.removeChild(node);
                found = true;
            }
        }

        if (found) {
            const firstResult = document.querySelector(".highlight");
            if (firstResult) {
                firstResult.scrollIntoView({ behavior: "smooth", block: "center" });
            }
            alert(`Hasil pencarian untuk: "${input}" telah disorot.`);
        } else {
            alert(`Tidak ada hasil ditemukan untuk: "${input}".`);
        }

        return false; // Mencegah reload halaman
    }

    // Tambahkan CSS untuk highlight
    const style = document.createElement("style");
    style.innerHTML = `
        .highlight {
            background-color: yellow;
            font-weight: bold;
        }
    `;
    document.head.appendChild(style);

    document.querySelector('.search-btn').addEventListener('click', function () {
        document.querySelector('.search-box').classList.toggle('active');
    });
</script>