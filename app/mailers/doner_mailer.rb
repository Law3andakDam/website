class DonerMailer < ApplicationMailer
  def confirmation_email(doner)
    @doner = doner
    @doner.update(confirmation_sent_at: Time.now.utc)
    mail to: doner.email, subject: 'Law3andakDam email confirmation'
  end
end
