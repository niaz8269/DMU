<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; color: #16202e; line-height: 1.6;">
  <p>Dear {{ $name }},</p>
  @if ($status === 'Approved')
    <p>Your application has been reviewed and the next step is ready. We will send you the details.</p>
  @elseif ($status === 'Rejected')
    <p>After review we are not able to move your application forward at this time.</p>
  @else
    <p>Our team has added a message to your application.</p>
  @endif
  @if ($remark !== '')
    <p style="background: #f5f8fc; border-left: 4px solid #0b2a4a; padding: 10px 14px;">{{ $remark }}</p>
  @endif
  <p><a href="{{ $portalUrl }}" style="display: inline-block; background: #0f5fb0; color: #ffffff; padding: 10px 18px; border-radius: 8px; text-decoration: none; font-weight: bold;">Open the applicant portal</a></p>
  <p>Kind regards,<br>CAS Admissions<br>Dalian Medical University admissions guide</p>
</div>
