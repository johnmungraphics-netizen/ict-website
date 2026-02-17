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
                'slug' => 'ict-training',
                'title' => 'ICT Training & Capacity Building',
                'category' => 'Training',
                'image' => 'uploads/2023/06/blog_standard01.jpg',
                'thumb' => 'uploads/2023/06/blog_standard01.jpg',
                'description' => 'ICT Africa offers comprehensive ICT training programs designed to empower organizations and individuals with essential digital skills. Our certified instructors deliver hands-on training in software applications, network administration, cloud computing, and emerging technologies. We customize our training programs to meet specific organizational needs and ensure practical, applicable learning outcomes.',
                'quote' => 'Empowering Africa through digital skills and knowledge transfer is at the heart of everything we do.',
                'offer_intro' => 'Our ICT Training & Capacity Building services are designed to bridge the digital divide and equip your team with the skills needed to thrive in the modern workplace.',
                'features' => [
                    'Corporate ICT Training Programs',
                    'Network Administration Certification',
                    'Cloud Computing & AWS/Azure Training',
                    'Software Application Training',
                    'Cybersecurity Awareness Programs',
                    'Custom Training Solutions',
                ],
                'conclusion' => 'With our training programs, your organization will gain a competitive edge through a digitally skilled workforce ready to tackle modern challenges.',
                'tags' => ['Training', 'Certification', 'Skills'],
            ],
            [
                'slug' => 'software-development',
                'title' => 'Software Development & Custom Solutions',
                'category' => 'Development',
                'image' => 'uploads/2023/06/blog_standard02.jpg',
                'thumb' => 'uploads/2023/06/blog_standard02.jpg',
                'description' => 'Transform your business operations with our custom software development services. ICT Africa builds scalable, secure, and user-friendly applications tailored to your specific business requirements. From web applications to mobile apps and enterprise systems, we deliver solutions that drive efficiency and growth.',
                'quote' => 'Building tomorrow\'s solutions today with cutting-edge technology and African innovation.',
                'offer_intro' => 'Our software development team uses agile methodologies and modern technologies to deliver high-quality solutions that meet your business objectives.',
                'features' => [
                    'Custom Web Application Development',
                    'Mobile App Development (iOS & Android)',
                    'Enterprise Resource Planning (ERP) Systems',
                    'API Development & Integration',
                    'E-commerce Solutions',
                    'Legacy System Modernization',
                ],
                'conclusion' => 'Partner with ICT Africa to transform your ideas into powerful software solutions that drive business success.',
                'tags' => ['Web Development', 'Mobile Apps', 'Custom Software'],
            ],
            [
                'slug' => 'it-infrastructure',
                'title' => 'IT Infrastructure Solutions',
                'category' => 'Infrastructure',
                'image' => 'uploads/2023/06/blog_standard03.jpg',
                'thumb' => 'uploads/2023/06/blog_standard03.jpg',
                'description' => 'Build a robust IT foundation with ICT Africa\'s comprehensive infrastructure solutions. We design, implement, and manage IT infrastructure that ensures reliability, scalability, and security. From network setup to cloud migration, we provide end-to-end infrastructure services.',
                'quote' => 'Building the digital backbone that powers African businesses for the future.',
                'offer_intro' => 'Our infrastructure experts deliver solutions that optimize performance, reduce costs, and ensure business continuity.',
                'features' => [
                    'Network Design & Implementation',
                    'Server Setup & Configuration',
                    'Cloud Migration Services (AWS, Azure, GCP)',
                    'Data Center Solutions',
                    'Virtualization & Containerization',
                    '24/7 Infrastructure Monitoring & Support',
                ],
                'conclusion' => 'Let ICT Africa build the IT infrastructure foundation that supports your business growth and digital transformation journey.',
                'tags' => ['Infrastructure', 'Cloud', 'Networking'],
            ],
            [
                'slug' => 'cyber-security',
                'title' => 'Cyber Security Services',
                'category' => 'Security',
                'image' => 'uploads/2019/05/courses06.jpg',
                'thumb' => 'uploads/2019/05/courses06.jpg',
                'description' => 'Protect your digital assets with ICT Africa\'s comprehensive cybersecurity solutions. In today\'s threat landscape, proactive security measures are essential. We offer vulnerability assessments, penetration testing, security audits, and incident response services to safeguard your organization.',
                'quote' => 'Your security is our priority - protecting African businesses from cyber threats.',
                'offer_intro' => 'Our cybersecurity team brings expertise in identifying vulnerabilities and implementing robust security measures.',
                'features' => [
                    'Vulnerability Assessment & Penetration Testing',
                    'Security Audits & Compliance Consulting',
                    'Incident Response & Recovery',
                    'Security Awareness Training',
                    'Managed Security Services (MSSP)',
                    'Identity & Access Management',
                ],
                'conclusion' => 'Trust ICT Africa to protect your organization from evolving cyber threats with our comprehensive security solutions.',
                'tags' => ['Security', 'Compliance', 'Protection'],
            ],
            [
                'slug' => 'it-consultancy',
                'title' => 'IT Consultancy & Advisory',
                'category' => 'Consultancy',
                'image' => 'uploads/2019/05/courses03.jpg',
                'thumb' => 'uploads/2019/05/courses03.jpg',
                'description' => 'Leverage ICT Africa\'s expertise to optimize your IT strategy and drive digital transformation. Our consultants provide strategic guidance on technology roadmaps, IT governance, project management, and digital innovation to help your organization achieve its goals.',
                'quote' => 'Strategic technology guidance that transforms businesses and drives growth.',
                'offer_intro' => 'Our consultancy services help organizations make informed technology decisions that align with business objectives.',
                'features' => [
                    'Digital Transformation Strategy',
                    'IT Governance & Risk Management',
                    'Technology Roadmap Development',
                    'Project Management & Delivery',
                    'Vendor Selection & Management',
                    'IT Budget Optimization',
                ],
                'conclusion' => 'Partner with ICT Africa\'s consultants to navigate the complex technology landscape and achieve your digital transformation goals.',
                'tags' => ['Strategy', 'Consulting', 'Digital Transformation'],
            ],
            [
                'slug' => 'data-management',
                'title' => 'Data Management & Analytics',
                'category' => 'Data',
                'image' => 'uploads/2019/05/courses05.jpg',
                'thumb' => 'uploads/2019/05/courses05.jpg',
                'description' => 'Unlock the power of your data with ICT Africa\'s data management and analytics solutions. We help organizations collect, store, process, and analyze data to gain valuable insights that drive business decisions. From database design to business intelligence dashboards, we deliver comprehensive data solutions.',
                'quote' => 'Transforming data into actionable insights that drive business success.',
                'offer_intro' => 'Our data experts help you harness the full potential of your organizational data.',
                'features' => [
                    'Database Design & Administration',
                    'Data Warehousing Solutions',
                    'Business Intelligence & Reporting',
                    'Data Analytics & Visualization',
                    'Big Data Solutions',
                    'Data Governance & Quality Management',
                ],
                'conclusion' => 'Let ICT Africa help you become a data-driven organization with our comprehensive data management and analytics services.',
                'tags' => ['Data', 'Analytics', 'Business Intelligence'],
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
