<?php

use Illuminate\Database\Seeder;

class DepartmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                "name" => "Accident and emergency (A&E)",
                "description" => "Also called Casualty Department, where you're likely to be taken if you have arrived in an ambulance or emergency situation."
            ],
            [
                "name" => "Admissions"  ,
                "description" => "At the Admitting Department, the patient will be required to provide personal information and sign consent forms before being taken to the hospital unit or ward. If the individual is critically ill, then, this information is usually obtained from a family member."
            ],
            [
                "name" => "Anesthetics" ,
                "description" => "Doctors in this department give anesthetic for operations and procedures. An anesthetic is a drug or agent that produces a complete or partial loss of feeling. There are three kinds of anesthetic: general, regional and local."
            ],
            [
                "name" => "Breast Screening" ,
                "description" => "Screens women for breast cancer and is usually linked to the X-ray or radiology department."
            ],
            [
                "name" => "Burn Center (Burn Unit or Burns Unit)" ,
                "description" => "A hospital specializing in the treatment of burns. Burn centers are often used for the treatment and recovery of patients with more severe burns."
            ],
            [
                "name" => "Cardiology" ,
                "description" => "Provides medical care to patients who have problems with their heart or circulation."
            ],
            [
                "name" => "Central Sterile Services Department (CSSD)" ,
                "description" => "(Sterile Processing Department (SPD) - Sterile Processing - Central Supply Department (CSD) - Central Supply) - A place in hospitals and other health care facilities that performs sterilization and other actions on medical equipment, devices, and consumables."
            ],
            [
                "name" => "Chaplaincy" ,
                "description" => "Chaplains promote the spiritual and pastoral wellbeing of patients, relatives and staff."
            ],
            [
                "name" => "Coronary Care Unit (CCU)" ,
                "description" => "(Cardiac intensive care unit (CICU) - A hospital ward specialized in the care of patients with heart attacks, unstable angina, cardiac dysrhythmia and other cardiac conditions that require continuous monitoring and treatment."
            ],
            [
                "name" => "Critical Care" ,
                "description" => "Also called intensive care, this department is for seriously ill patients."
            ],
            [
                "name" => "Diagnostic Imaging" ,
                "description" => "Also known as X-Ray Department and/or Radiology Department."
            ],
            [
                "name" => "Discharge Lounge" ,
                "description" => "Patients who don't need to stay in a ward are transferred to the lounge on the day of discharge. Many hospitals now have discharge lounges with facilities such as TV's, radio, puzzles, magazines, books and newspapers."
            ],
            [
                "name" => "Elderly services" ,
                "description" => "Covers and assists with a wide range of issues associated with seniors."
            ],
            [
                "name" => "Finance Department" ,
                "description" => "Performs all works related to budget and ideal use of the items of such budget. Also, it prepares payrolls and monthly wages, and concludes contracts of operation and maintenance and purchases. In addition, it makes available all amounts of money required for procurement of all materials and equipment."
            ],
            [
                "name" => "Gastroenterology" ,
                "description" => "This department investigates and treats digestive and upper and lower gastrointestinal diseases."
            ],
            [
                "name" => "General Services" ,
                "description" => "Support Services include services provided by Departments such as Portering, Catering, Housekeeping, Security, Health & Safety, Switch, Laundry and the management of facilities such as parking, baby tagging, access control, CCTV etc."
            ],
            [
                "name" => "General Surgery" ,
                "description" => "Covers a wide range of types of surgery and procedures on patients."
            ],
            [
                "name" => "Gynecology" ,
                "description" => "Investigates and treats problems relating to the female urinary tract and reproductive organs, such as Endometriosis, infertility and incontinence."
            ],
            [
                "name" => "Haematology" ,
                "description" => "These hospital services work with the laboratory. In addition doctors treat blood diseases and malignancies related to the blood."
            ],
            [
                "name" => "Health & Safety" ,
                "description" => "The role of the occupational health and safety department is to promote and maintain the highest possible degree of health and safety for all employees, physicians, volunteers, students and contractors, and actively participates in quality, safety and risk initiatives. Numerous health and safety issues associated with healthcare facilities include blood-borne pathogens and biological hazards, potential chemical and drug exposures, waste anesthetic gas exposures, respiratory hazards, ergonomic hazards from lifting and repetitive tasks, laser hazards, hazards associated with laboratories, and radioactive material and x-ray hazards. In addition to the medical staff, large healthcare facilities employ a wide variety of trades that have health and safety hazards associated with them. These include mechanical maintenance, medical equipment maintenance, housekeeping, food service, building and grounds maintenance, laundry, and administrative staff."
            ],
            [
                "name" => "Intensive Care Unit (ICU)" ,
                "description" => "(Intensive Therapy Unit, Intensive Treatment Unit (ITU), Critical Care Unit (CCU) - A special department of a hospital or health care facility that provides intensive treatment medicine and caters to patients with severe and life-threatening illnesses and injuries, which require constant, close monitoring and support from specialist equipment and medications."
            ],
            [
                "name" => "Human Resources" ,
                "description" => "Role is to provide a professional, efficient and customer focused service to managers and staff and in turn facilitate the delivery of a professional, efficient and customer focused service to patients."
            ],
            [
                "name" => "Infection Control" ,
                "description" => "Primarily responsible for conducting surveillance of hospital-acquired infections and investigating and controlling outbreaks or infection clusters among patients and health care personnel. The department calculates rates of hospital-acquired infections, collates antibiotic susceptibility data, performs analysis of aggregated infection data and provides comparative data to national benchmarks over time."
            ],
            [
                "name" => "Information Management" ,
                "description" => "Meaningful information can be used in quality management, continuous quality improvement and peer review. By improving the quality of information, core data can be provided for randomized clinical trials, outcomes research and many studies."
            ],
            [
                "name" => "Maternity" ,
                "description" => "Maternity wards provide antenatal care, delivery of babies and care during childbirth, and postnatal support."
            ],
            [
                "name" => "Medical Records" ,
                "description" => "Includes a variety of types of \"notes\" entered over time by health care professionals, recording observations and administration of drugs and therapies, orders for the administration of drugs and therapies, test results, x-rays, reports, etc."
            ],
            [
                "name" => "Microbiology" ,
                "description" => "The microbiology department provides an extensive clinical service, including mycology, parasitology, mycobacteriology, a high security pathology unit, and a healthcare associated infection investigation unit, as well as routine bacteriology and an expanding molecular diagnostic repertoire."
            ],
            [
                "name" => "Neonatal" ,
                "description" => "Closely linked with the hospital maternity department, provides care and support for babies and their families."
            ],
            [
                "name" => "Nephrology" ,
                "description" => "Monitors and assesses patients with various kidney (renal) problems and conditions."
            ],
            [
                "name" => "Neurology" ,
                "description" => "A medical specialty dealing with disorders of the nervous system. Specifically, it deals with the diagnosis and treatment of all categories of disease involving the central, peripheral, and autonomic nervous systems, including their coverings, blood vessels, and all effector tissue, such as muscle. Includes the brain, spinal cord, and spinal cord injuries (SCI)."
            ],
            [
                "name" => "Nutrition and Dietetics" ,
                "description" => "Dietitians and nutritionists provide specialist advice on diet for hospital wards and outpatient clinics."
            ],
            [
                "name" => "Obstetrics/Gynecology" ,
                "description" => "Specialist nurses, midwives and imaging technicians provide maternity services such as: antenatal and postnatal care, maternal and foetal surveillance, and prenatal diagnosis."
            ],
            [
                "name" => "Occupational Therapy" ,
                "description" => "Helps physically or mentally impaired people, including temporary disability, practices in the fields of both healthcare as well as social care. Often abbreviated as \"OT\", Occupational Therapy promotes health by enabling people to perform meaningful and purposeful occupations. These include (but are not limited to) work, leisure, self care, domestic and community activities. Occupational therapists work with individuals, families, groups and communities to facilitate health and well-being through engagement or re-engagement in occupation."
            ],
            [
                "name" => "Oncology" ,
                "description" => "A branch of medicine that deals with cancer and tumors. A medical professional who practices oncology is an oncologist. The Oncology department provides treatments, including radiotherapy and chemotherapy, for cancerous tumors and blood disorders."
            ],
            [
                "name" => "Ophthalmology" ,
                "description" => "Ophthalmology is a branch of medicine which deals with the diseases and surgery of the visual pathways, including the eye, hairs, and areas surrounding the eye, such as the lacrimal system and eyelids. The term ophthalmologist is an eye specialist for medical and surgical problems. The Ophthalmology department provides a range of ophthalmic eye related services for both in and outpatients."
            ],
            [
                "name" => "Orthopaedics" ,
                "description" => "Treats conditions related to the musculoskeletal system, including joints, ligaments, bones, muscles, tendons and nerves."
            ],
            [
                "name" => "Otolaryngology (Ear, Nose, and Throat)" ,
                "description" => "The ENT Department provide comprehensive and specialized care covering both Medical and Surgical conditions related not just specifically to the Ear, Nose and Throat, but also other areas within the Head and Neck region. It is often divided into sub-specialties dealing with only one part of the traditional specialty (ontology, rhinology and laryngology)."
            ],
            [
                "name" => "Pain Management" ,
                "description" => "Helps treat patients with severe long-term pain. Alternative pain relief treatments such as acupuncture, nerve blocks and drug treatment, are also catered for."
            ],
            [
                "name" => "Patient Accounts" ,
                "description" => "The Patient Accounts Department answers all billing questions and concerns, requests for itemized bills, and account balance inquiries. The patient accounts department also assists patients in their insurance benefits for services rendered."
            ],
            [
                "name" => "Patient Services" ,
                "description" => "The Patient Services Manager is a source of information and can channel patient queries in relation to hospital services to the appropriate departments."
            ],
            [
                "name" => "Pharmacy" ,
                "description" => "Responsible for drugs in a hospital, including purchasing, supply and distribution."
            ],
            [
                "name" => "Physiotherapy" ,
                "description" => "Physiotherapists work through physical therapies such as exercise, massage, and manipulation of bones, joints and muscle tissues."
            ],
            [
                "name" => "Purchasing & Supplies" ,
                "description" => "Purchasing & Supplies Department is responsible for the procurement function of the hospital."
            ],
            [
                "name" => "Radiology" ,
                "description" => "The branch or specialty of medicine that deals with the study and application of imaging technology like x-ray and radiation to diagnosing and treating disease. The Department of Radiology is a highly specialized, full-service department which strives to meet all patient and clinician needs in diagnostic imaging and image-guided therapies."
            ],
            [
                "name" => "Radiotherapy" ,
                "description" => "Also called radiation therapy, is the treatment of cancer and other diseases with ionizing radiation."
            ],
            [
                "name" => "Renal" ,
                "description" => "Provides facilities for peritoneal dialysis and helps facilitate home Hemodialysis."
            ],
            [
                "name" => "Rheumatology" ,
                "description" => "Rheumatologists care for and treat patients for musculoskeletal disorders such as: bones, joints, ligaments, tendons, muscles and nerves."
            ],
            [
                "name" => "Sexual Health" ,
                "description" => "Also known as genitourinary medicine - Provides advice, testing and treatment for sexually transmitted infections, family planning care, pregnancy testing and advice, care and support for sexual and genital problems."
            ],
            [
                "name" => "Social Work" ,
                "description" => "Clinical social workers help patients and their families deal with the broad range of psychosocial issues and stresses related to coping with illness and maintaining health. Social workers, resource specialists and advocates form a network that addresses the challenges families face, increases accessibility to health care and other human services, and serves as a bridge between the hospital setting and a patient's family life, home and community."
            ],
            [
                "name" => "Urology" ,
                "description" => "The urology department is run by consultant urology surgeons and investigates areas linked to kidney and bladder conditions."
            ]
        ];
        \App\Models\Department::insert($departments);
    }
}
