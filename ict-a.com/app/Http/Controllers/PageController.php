<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        // You can pass dynamic data here from your database
        $courses = [];
        $posts = [];
        
        return view('pages.home', compact('courses', 'posts'));
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Handle contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Here you can:
        // - Send email notification
        // - Save to database
        // - Integrate with a third-party service

        // Example: Mail::to('admin@example.com')->send(new ContactFormMail($validated));

        return redirect()->route('contact')
            ->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    /**
     * Display the blog page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function blog(Request $request)
    {
        // You can pass dynamic data here from your database
        $posts = [];
        
        // Example: $posts = Post::latest()->paginate(10);
        
        return view('pages.blog', compact('posts'));
    }

    /**
     * Display the courses page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function courses(Request $request)
    {
        // You can pass dynamic data here from your database
        $courses = [];
        
        // Example filtering:
        // $query = Course::query();
        // if ($request->has('s')) {
        //     $query->where('title', 'like', '%' . $request->s . '%');
        // }
        // if ($request->has('category')) {
        //     $query->where('category', $request->category);
        // }
        // $courses = $query->paginate(12);
        
        return view('pages.courses', compact('courses'));
    }

    /**
     * Get all services data.
     *
     * @return array
     */
    private function getServices()
    {
        return [
            [
                'slug' => 'ict-audits',
                'title' => 'ICT audits and IT lifecycle management',
                'category' => 'IT Audit',
                'image' => 'uploads/2023/06/ict.jpg',
                'thumb' => 'uploads/2023/06/ict.jpg',
                'description' => 'We provide IT audit services for businesses benchmarking their existing IT investments against the industry best practice. Our approach seeks to enable the organization maximize efficiency in protecting the investments made in infrastructure, applications and licensing. We partner in designing the IT roadmap for enterprises positioning it as business enabler for their current and future goals.',
                'quote' => 'With an IT audit, we examine and evaluate an organization\'s information technology infrastructure, policies and operations.',
                'offer_intro' => 'Our comprehensive IT audit services help you understand your current IT landscape and plan for the future.',
                'features' => [
                    'IT Infrastructure Assessment & Benchmarking',
                    'Software License Compliance Audits',
                    'IT Security & Risk Assessment',
                    'IT Governance & Policy Review',
                    'Technology Roadmap Development',
                    'IT Budget & Resource Optimization',
                    'Business Continuity Planning',
                    'IT Service Management (ITSM) Evaluation',
                ],
                'conclusion' => 'Determine whether IT controls protect corporate assets. Ensure data integrity and are aligned with the business\'s overall goals. IT auditors examine not only physical security controls, but also overall business and financial controls that involve information technology systems.',
                'tags' => ['IT Audit', 'Compliance', 'IT Governance'],
            ],
            [
                'slug' => 'outsourced-ict-support',
                'title' => 'Outsourced ICT user support',
                'category' => 'Support',
                'image' => 'uploads/2023/06/IT training.jpg',
                'thumb' => 'uploads/2023/06/IT training.jpg',
                'description' => 'ICT Africa offers outsourcing services based on the ITIL (Information Technology Infrastructure Library) framework of best practices, allowing us to readily identify and overcome technical challenges. We offer flexible first and second lines of IT helpdesk response whether on-premise or remotely.',
                'quote' => 'Leveraging on our depth and varied skills base we provide organizations with a flexible and affordable way to go model of IT infrastructure support on agreed SLA.',
                'offer_intro' => 'This frees the organization\'s resources to concentrate on their core business. This improves business agility, reduce costs, manage risks and improve operational efficiencies.',
                'features' => [
                    'First & Second Line IT Helpdesk Support',
                    'Remote & On-site Technical Support',
                    'End User Services - Hardware & Software Access',
                    'Computing Services - Best-in-class Technologies',
                    'Service Desk Management (ITIL Framework)',
                    '24/7 Support Coverage Options',
                    'SLA-based Service Delivery',
                    'Incident & Problem Management',
                ],
                'conclusion' => 'Give your employees access to the hardware and software they need to improve service delivery and maximize productivity. Leverage the power of best-in-class technologies to create a workplace environment that supports your business infrastructure.',
                'tags' => ['IT Support', 'Helpdesk', 'ITIL'],
            ],
            [
                'slug' => 'network-infrastructure',
                'title' => 'Network Infrastructure',
                'category' => 'Infrastructure',
                'image' => 'images/internet1.jpg',
                'thumb' => 'images/internet1.jpg',
                'description' => 'ICT Africa designs and implements complete networking solutions on structured cabling and corporate wireless systems which provides a comprehensive telecommunication infrastructure. This infrastructure serves a wide range of uses, such as telephony system with IPBX service, LAN infrastructure, video surveillance system, system of access control, security systems and many more.',
                'quote' => 'Building robust network foundations that connect your business and enable seamless communication.',
                'offer_intro' => 'Our network infrastructure solutions provide the backbone for your organization\'s digital operations.',
                'features' => [
                    'Structured Cabling Systems (Cat6, Cat6a, Fiber Optic)',
                    'Corporate Wireless Networks (Wi-Fi 6)',
                    'IP Telephony & IPBX Systems',
                    'LAN/WAN Design & Implementation',
                    'Video Surveillance Systems (CCTV)',
                    'Access Control Systems',
                    'Network Security & Firewalls',
                    'Network Monitoring & Management',
                ],
                'conclusion' => 'With our network infrastructure solutions, your organization will have a reliable, scalable, and secure network that supports your business operations and growth.',
                'tags' => ['Networking', 'Infrastructure', 'Cabling'],
            ],
            [
                'slug' => 'cloud-services',
                'title' => 'Cloud services for email, collaboration and file sharing',
                'category' => 'Cloud',
                'image' => 'uploads/2023/06/software development.jpg',
                'thumb' => 'uploads/2023/06/software development.jpg',
                'description' => 'We believe the cloud gives organizations ability to leapfrog in accessing advanced technology and innovations. We specialize in mobilizing cloud services for email & collaboration, application deployment, backup services and artificial intelligence across major cloud providers.',
                'quote' => 'This is a form of software that is offered as a service (SaaS) where the user gives up control to a third party to manage data offsite.',
                'offer_intro' => 'ICT Africa has two major vendors we partner with to support cloud-based Emails, Microsoft office 365 and Google workspace. This is a resourceful service if your company doesn\'t have the internal expertise to manage this information and also reduces overheads.',
                'features' => [
                    'Microsoft Office 365 Implementation & Support',
                    'Google Workspace Deployment & Management',
                    'Email Migration & Configuration',
                    'Cloud Collaboration Tools (Teams, Sharepoint)',
                    'Cloud Backup & Disaster Recovery',
                    'Application Deployment on Cloud',
                    'Cloud Storage & File Sharing Solutions',
                    'Multi-Cloud Strategy & Management',
                ],
                'conclusion' => 'Embrace the cloud to enhance collaboration, reduce IT costs, and access your data from anywhere. Our cloud experts ensure smooth migration and ongoing support.',
                'tags' => ['Cloud', 'Office 365', 'Google Workspace'],
            ],
            [
                'slug' => 'datacenter-solutions',
                'title' => 'Datacenter solutions',
                'category' => 'Datacenter',
                'image' => 'uploads/2023/06/IT training.jpg',
                'thumb' => 'uploads/2023/06/IT training.jpg',
                'description' => 'We provide mission critical support for key installations in the organization covering virtualization, security and firewalls and enterprise backup. We partner with the leading vendors in this space example Microsoft, VMware, Cisco, Fortinet, Veeam, TrendMicro among others.',
                'quote' => 'Building resilient datacenter infrastructure that powers your critical business operations.',
                'offer_intro' => 'Our datacenter solutions ensure high availability, security, and performance for your mission-critical applications and data.',
                'features' => [
                    'Server Virtualization (VMware, Hyper-V)',
                    'Enterprise Backup & Recovery (Veeam)',
                    'Next-Gen Firewalls (Fortinet, Cisco)',
                    'Storage Solutions (SAN, NAS)',
                    'Datacenter Design & Build',
                    'High Availability & Disaster Recovery',
                    'Security & Endpoint Protection (TrendMicro)',
                    'Datacenter Monitoring & Management',
                ],
                'conclusion' => 'Partner with ICT Africa to build a world-class datacenter infrastructure that supports your business growth and ensures data security and availability.',
                'tags' => ['Datacenter', 'Virtualization', 'Enterprise'],
            ],
            [
                'slug' => 'security-systems',
                'title' => 'SECURITY SYSTEMS',
                'category' => 'Security',
                'image' => 'uploads/2023/06/cyber.jpg',
                'thumb' => 'uploads/2023/06/cyber.jpg',
                'description' => 'ICT Africa provides comprehensive security systems solutions to protect your organization, staff, and assets. Our security offerings include Big Brother service offerings, Covid-19 safety checks, PPE Hakikisha, Resource output optimization, Critical Assets KPI\'s, and CCTV Audits for crime prevention and investigation.',
                'quote' => 'Protecting your organization with advanced security systems and monitoring solutions.',
                'offer_intro' => 'Our integrated security systems provide real-time monitoring, incident response, and comprehensive protection for your facilities and operations.',
                'features' => [
                    'Big Brother Service - Workforce & Facility Safety Monitoring',
                    'Covid-19 Safety Checks & PPE Compliance (PPE Hakikisha)',
                    'Resource Output Optimization - Productivity Tracking',
                    'Critical Assets KPI\'s - Real-time Monitoring',
                    'CCTV Audits - Live Feed & Stored Footage Analysis',
                    'Crime Prevention & Investigation Support',
                    'Gain Insight from Deployments via BI Reports',
                    'Data-Driven Decision Making for Strategic Actions',
                ],
                'conclusion' => 'Bridge the gap between data and decision making through professional security assessments. Get AI powered solutions to your business within agreed KPI\'s and brand. Get fast and improved solutions to your business that are aligned to strategic actions.',
                'tags' => ['Security', 'CCTV', 'Monitoring'],
            ],
            [
                'slug' => 'bulk-sms',
                'title' => 'Bulk SMS and Integration to ERP',
                'category' => 'Messaging',
                'image' => 'images/sms.jpg',
                'thumb' => 'images/sms.jpg',
                'description' => 'Automated Messaging refers to a system that delivers a recorded voice message or text message to multiple phones automatically. This type of system eliminates the waste time manually calling or texting multiple phone numbers one at a time.',
                'quote' => 'Deliver timely notifications about pending appointments, arrivals, and more to keep your customers engaged.',
                'offer_intro' => 'You can enable a customer to confirm or reschedule an appointment or delivery from within the text message — via SMS, MMS, social chat apps or voice. Reduce missed appointments, delivery attempts, and support costs with automated notifications.',
                'features' => [
                    'Bulk SMS Messaging Platform',
                    'ERP System Integration',
                    'Automated Appointment Reminders',
                    'Two-Way SMS Communication',
                    'Delivery & Arrival Notifications',
                    'Voice Message Broadcasting',
                    'Social Chat App Integration',
                    'API Integration for Custom Systems',
                ],
                'conclusion' => 'Enhanced rich-media features can provide an opportunity to create those "wow" moments that strengthen customer relationships. Streamline your customer communication and reduce operational costs with our automated messaging solutions.',
                'tags' => ['SMS', 'Automation', 'Integration'],
            ],
            [
                'slug' => 'software-solutions',
                'title' => 'Software solutions',
                'category' => 'Software',
                'image' => 'uploads/2023/06/software development.jpg',
                'thumb' => 'uploads/2023/06/software development.jpg',
                'description' => 'ICT Africa develops innovative software solutions designed to streamline your business operations and improve efficiency. Our product suite includes Mgeni VMS (visitor management system), Orodha (fully automated checklist solution), Easy Sign (innovative employee time attendance system), and Workflow (create automated system flows for processes).',
                'quote' => 'Innovative software solutions built for African businesses to enhance productivity and operational excellence.',
                'offer_intro' => 'Our software products are designed to solve real business challenges with user-friendly interfaces and powerful functionality.',
                'features' => [
                    'Mgeni VMS - Contactless Visitor Management System',
                    'Orodha - Automated Checklist & Inventory Management',
                    'Easy Sign - Employee Time & Attendance System',
                    'Workflow - Process Automation & System Flows',
                    'Custom Software Development',
                    'Mobile & Web Applications',
                    'System Integration Services',
                    'Ongoing Support & Maintenance',
                ],
                'conclusion' => 'Transform your business operations with our proven software solutions. Each product is designed to save time, reduce errors, and provide valuable insights for better decision making.',
                'tags' => ['Software', 'Automation', 'Business Apps'],
            ],
        ];
    }

    /**
     * Display a single service.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function serviceShow($slug)
    {
        $allServices = $this->getServices();
        
        $service = collect($allServices)->firstWhere('slug', $slug);
        
        if (!$service) {
            abort(404);
        }
        
        return view('pages.service-show', compact('service', 'allServices'));
    }
}
