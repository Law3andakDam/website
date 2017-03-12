require 'rails_helper'

RSpec.describe Case, type: :model do
  it { should validate_presence_of(:name) }
  it { should validate_presence_of(:email) }
  it { should validate_presence_of(:telephone) }
  it { should validate_presence_of(:hospital) }
  it { should validate_presence_of(:blood_type_id) }
  it { should allow_value('elfiky@gmail.com').for(:email) }
  it { should_not allow_value('elfiky.gmail').for(:email) }
  it { should belong_to(:blood_type) }
end
