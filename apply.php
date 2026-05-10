<!DOCTYPE html>
<html lang="en">

<head>
    <title>Apply Now — AMERICAN WORLDPATH</title>
    <?php include_once('includes/site-master.php') ?>
</head>

<body class="apply_sticky">
    <?php include_once('includes/header.php') ?>
    
    <main>
    <section class="apply_form_banner">
        <div class="contain">
            <div class="banner_text">
                <h1>Live and Work in the US</h1>
                <p>Learn more about if the EB-3 visa for immigrant workers is right for you.</p>
            </div>
        </div>
    </section>
    <section class="apply_form_sec">
        <div class="contain">
            <div class="flex">
                <div class="colL">
                    <div class="ckEditor text-apply">
                        
                        <h4>What Is An EB-3 Visa?</h4>
                        <p>The EB-3 visa is a path to permanent residency, a Green Card, offered by the US government for foreign workers who make a commitment to working for US companies. This process allows foreign workers in low-demand jobs like cleaning, logistics, manufacturing, hospitality, and food and beverage services to live and work in the US through a US-based employer sponsor. EB-3 immigrants are also eligible to bring their families with them. This path may also lead to US citizenship after five years of continuous employment and renewal of your Green Card.</p>

                        <div class="image">
                            <img src="images/apply1.jpg">
                        </div>

                        <h4>Help Solve The US Labor Shortage</h4>
                        <p>US employers are looking for talent to fill a wide variety of jobs affected by labor shortages. As a foreign worker, you play an important role in filling these gaps while establishing permanent residency in the US for yourself and your family.</p>
                        <div class="image">
                            <img src="images/apply2.jpg">
                        </div>
                        <h4>Who Can Apply ?</h4>
                        <p>People living in the United States, Latin America, Asia, Africa, and Europe are eligible to apply.</p>
                        <ul>
                            <li>Singles, couples, and families with children under the age of 21</li>
                            <li>People eager to work and enhance their skills</li>
                            <li>Students studying in the US and want to stay in the country</li>
                            <li>Parents wanting better educational opportunities for their children</li>
                            <li>Workers who want to build a brighter economic future for their families.</li>
                            <li>Anyone who wants to live and work legally in the US.</li>
                        </ul>
                        <div class="image">
                            <img src="images/apply3.jpg">
                        </div>
                    </div>
                </div>
                <div class="colR">
                    <div class="form-card">
                        <h3 class="form-title">Basic Information</h3>
                        <form>
                            <!-- Name Row -->
                            <div class="field-row cols-2">
                            <div class="field">
                                <label for="name">Name</label>
                                <input type="text" id="name" placeholder="Name" />
                            </div>
                            <div class="field">
                                <label for="second-name">Second Name</label>
                                <input type="text" id="second-name" placeholder="Second Name" />
                            </div>
                            </div>

                            <!-- Last Name Row -->
                            <div class="field-row cols-2">
                            <div class="field">
                                <label for="last-name">Last Name</label>
                                <input type="text" id="last-name" placeholder="Last Name" />
                            </div>
                            <div class="field">
                                <label for="second-surname">Second Surname</label>
                                <input type="text" id="second-surname" placeholder="Second Surname" />
                            </div>
                            </div>

                            <!-- Email -->
                            <div class="field-row cols-1">
                            <div class="field">
                                <label for="email">Email</label>
                                <input type="email" id="email" placeholder="Email" />
                            </div>
                            </div>

                            <!-- Phone -->
                            <div class="field-row phone-row">
                                <div class="field">
                                    <label>Phone</label>
                                    <div class="phone-selector-wrap" id="phoneSelectorWrap">
                                    <div class="phone-trigger" id="phoneTrigger">
                                        <img class="trigger-flag" id="triggerFlag" src="https://flagcdn.com/w40/us.png" alt="US" />
                                        <span class="trigger-dial" id="triggerDial">(+1)</span>
                                        <span class="trigger-chevron">▼</span>
                                    </div>
                                    <div class="phone-dropdown" id="phoneDropdown">
                                        <div class="phone-search-wrap">
                                        <input class="phone-search" id="phoneSearch" type="text" placeholder="Search country..." autocomplete="off" />
                                        </div>
                                        <div class="phone-list" id="phoneList"></div>
                                    </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="phone">Contact Number</label>
                                    <input type="tel" id="phone" placeholder="Contact Number" />
                                </div>
                            </div>

                            <!-- Gender -->
                            <div class="field-row cols-1">
                            <div class="field">
                                <label for="gender">Gender</label>
                                <div class="select-wrap">
                                <select id="gender">
                                    <option value="" disabled selected>Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Non-binary</option>
                                    <option>Prefer not to say</option>
                                </select>
                                </div>
                            </div>
                            </div>

                            <!-- Country of Residence -->
                            <div class="field-row cols-1">
                            <div class="field">
                                <label for="country">Country of Residence</label>
                                <div class="select-wrap">
                                <select id="country">
                                    <option value="" disabled selected>Select country</option>
                                    <option>United States</option>
                                    <option>Mexico</option>
                                    <option>Canada</option>
                                    <option>Colombia</option>
                                    <option>Argentina</option>
                                    <option>Spain</option>
                                    <option>Other</option>
                                </select>
                                </div>
                            </div>
                            </div>

                            <!-- City -->
                            <div class="field-row cols-1">
                            <div class="field">
                                <label for="city">City</label>
                                <input type="text" id="city" placeholder="City of Residence" />
                            </div>
                            </div>

                            <!-- Language -->
                            <div class="field-row cols-1">
                            <div class="field">
                                <label for="language">Language</label>
                                <div class="select-wrap">
                                <select id="language">
                                    <option value="" disabled selected>In which language would you like to be attended</option>
                                    <option>English</option>
                                    <option>Spanish</option>
                                    <option>French</option>
                                    <option>Portuguese</option>
                                </select>
                                </div>
                            </div>
                            </div>

                            <!-- Q1 -->
                            <div class="radio-block">
                            <p>Do you or your immediate family (spouse and children) have a history of unlawful presence or deportation in the United States?</p>
                            <div class="radio-options">
                                <label class="radio-label">
                                <input type="radio" name="unlawful" value="yes" /> YES
                                </label>
                                <label class="radio-label">
                                <input type="radio" name="unlawful" value="no" /> NO
                                </label>
                            </div>
                            </div>

                            <!-- Q2 -->
                            <div class="radio-block">
                            <p>Do you or your immediate family (spouse and children) have a criminal record in the United States or in your country of origin?</p>
                            <div class="radio-options">
                                <label class="radio-label">
                                <input type="radio" name="criminal" value="yes" /> YES
                                </label>
                                <label class="radio-label">
                                <input type="radio" name="criminal" value="no" /> NO
                                </label>
                            </div>
                            </div>

                            <!-- Consent -->
                            <div class="consent-area">
                            <p class="consent-note">By completing this form, I hereby give my prior, express, and informed consent for the processing of my personal data.<span>*</span></p>
                            <label class="consent-check">
                                <input type="checkbox" id="accept" />
                                I accept
                            </label>
                            </div>

                            <!-- Submit -->
                            <button type="submit" class="btn-finish">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    </main>

    <?php include_once('includes/footer.php') ?>
    <?php include_once('includes/commonjs.php') ?>

    <script>
        const countries = [
            { code: 'af', name: 'Afghanistan', dial: '+93' },
            { code: 'al', name: 'Albania', dial: '+355' },
            { code: 'dz', name: 'Algeria', dial: '+213' },
            { code: 'ar', name: 'Argentina', dial: '+54' },
            { code: 'au', name: 'Australia', dial: '+61' },
            { code: 'at', name: 'Austria', dial: '+43' },
            { code: 'be', name: 'Belgium', dial: '+32' },
            { code: 'br', name: 'Brazil', dial: '+55' },
            { code: 'ca', name: 'Canada', dial: '+1' },
            { code: 'cn', name: 'China', dial: '+86' },
            { code: 'co', name: 'Colombia', dial: '+57' },
            { code: 'hr', name: 'Croatia', dial: '+385' },
            { code: 'cz', name: 'Czech Republic', dial: '+420' },
            { code: 'dk', name: 'Denmark', dial: '+45' },
            { code: 'eg', name: 'Egypt', dial: '+20' },
            { code: 'fi', name: 'Finland', dial: '+358' },
            { code: 'fr', name: 'France', dial: '+33' },
            { code: 'de', name: 'Germany', dial: '+49' },
            { code: 'gh', name: 'Ghana', dial: '+233' },
            { code: 'gr', name: 'Greece', dial: '+30' },
            { code: 'hu', name: 'Hungary', dial: '+36' },
            { code: 'in', name: 'India', dial: '+91' },
            { code: 'id', name: 'Indonesia', dial: '+62' },
            { code: 'ir', name: 'Iran', dial: '+98' },
            { code: 'iq', name: 'Iraq', dial: '+964' },
            { code: 'ie', name: 'Ireland', dial: '+353' },
            { code: 'il', name: 'Israel', dial: '+972' },
            { code: 'it', name: 'Italy', dial: '+39' },
            { code: 'jp', name: 'Japan', dial: '+81' },
            { code: 'jo', name: 'Jordan', dial: '+962' },
            { code: 'ke', name: 'Kenya', dial: '+254' },
            { code: 'kr', name: 'South Korea', dial: '+82' },
            { code: 'kw', name: 'Kuwait', dial: '+965' },
            { code: 'lb', name: 'Lebanon', dial: '+961' },
            { code: 'my', name: 'Malaysia', dial: '+60' },
            { code: 'mx', name: 'Mexico', dial: '+52' },
            { code: 'ma', name: 'Morocco', dial: '+212' },
            { code: 'nl', name: 'Netherlands', dial: '+31' },
            { code: 'nz', name: 'New Zealand', dial: '+64' },
            { code: 'ng', name: 'Nigeria', dial: '+234' },
            { code: 'no', name: 'Norway', dial: '+47' },
            { code: 'pk', name: 'Pakistan', dial: '+92' },
            { code: 'pe', name: 'Peru', dial: '+51' },
            { code: 'ph', name: 'Philippines', dial: '+63' },
            { code: 'pl', name: 'Poland', dial: '+48' },
            { code: 'pt', name: 'Portugal', dial: '+351' },
            { code: 'qa', name: 'Qatar', dial: '+974' },
            { code: 'ro', name: 'Romania', dial: '+40' },
            { code: 'ru', name: 'Russia', dial: '+7' },
            { code: 'sa', name: 'Saudi Arabia', dial: '+966' },
            { code: 'za', name: 'South Africa', dial: '+27' },
            { code: 'es', name: 'Spain', dial: '+34' },
            { code: 'se', name: 'Sweden', dial: '+46' },
            { code: 'ch', name: 'Switzerland', dial: '+41' },
            { code: 'tr', name: 'Turkey', dial: '+90' },
            { code: 'ua', name: 'Ukraine', dial: '+380' },
            { code: 'ae', name: 'United Arab Emirates', dial: '+971' },
            { code: 'gb', name: 'United Kingdom', dial: '+44' },
            { code: 'us', name: 'United States of America', dial: '+1' },
            { code: 'uy', name: 'Uruguay', dial: '+598' },
            { code: 'uz', name: 'Uzbekistan', dial: '+998' },
            { code: 've', name: 'Venezuela', dial: '+58' },
            { code: 'vn', name: 'Vietnam', dial: '+84' },
            { code: 'ye', name: 'Yemen', dial: '+967' },
            { code: 'zw', name: 'Zimbabwe', dial: '+263' },
        ];

        let selected = countries.find(c => c.code === 'us');
        const trigger = document.getElementById('phoneTrigger');
        const dropdown = document.getElementById('phoneDropdown');
        const search = document.getElementById('phoneSearch');
        const list = document.getElementById('phoneList');
        const triggerFlag = document.getElementById('triggerFlag');
        const triggerDial = document.getElementById('triggerDial');

        function flagUrl(code) {
            return `https://flagcdn.com/w40/${code}.png`;
        }

        function renderList(filter = '') {
            const q = filter.toLowerCase();
            const filtered = countries.filter(c =>
            c.name.toLowerCase().includes(q) || c.dial.includes(q)
            );
            list.innerHTML = filtered.map(c => `
            <div class="phone-option ${c.code === selected.code ? 'selected' : ''}" data-code="${c.code}">
                <img src="${flagUrl(c.code)}" alt="${c.name}" />
                <span class="opt-dial">(${c.dial})</span>
                <span class="opt-name">${c.name}</span>
            </div>
            `).join('');

            list.querySelectorAll('.phone-option').forEach(el => {
            el.addEventListener('click', () => {
                const code = el.dataset.code;
                selected = countries.find(c => c.code === code);
                triggerFlag.src = flagUrl(selected.code);
                triggerFlag.alt = selected.name;
                triggerDial.textContent = `(${selected.dial})`;
                closeDropdown();
            });
            });

            // Scroll selected into view
            const sel = list.querySelector('.selected');
            if (sel) sel.scrollIntoView({ block: 'nearest' });
        }

        function openDropdown() {
            dropdown.classList.add('open');
            trigger.classList.add('open');
            search.value = '';
            renderList();
            search.focus();
        }

        function closeDropdown() {
            dropdown.classList.remove('open');
            trigger.classList.remove('open');
        }

        trigger.addEventListener('click', (e) => {
            e.stopPropagation();
            dropdown.classList.contains('open') ? closeDropdown() : openDropdown();
        });

        search.addEventListener('input', () => renderList(search.value));

        document.addEventListener('click', (e) => {
            if (!document.getElementById('phoneSelectorWrap').contains(e.target)) {
            closeDropdown();
            }
        });

        // Init render
        renderList();
    </script>
</body>
</html>